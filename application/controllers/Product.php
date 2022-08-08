<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* Product Controller
*/
class Product extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		if(!isset($this->session->userid) && ($this->session->userstatus !=1)){
			redirect('Login');
		}
		$data = array();
		$this->load->model("ProductModel");
	}
	public function add_product_form(){
		$data['all_cat'] = $this->ProductModel->get_all_category();
		$data['all_sub_cat'] = $this->ProductModel->get_all_sub_category();
		$data['main_content'] = $this->load->view('back/add_product',$data,true);
		$this->load->view('back/adminpanel',$data);
	}
	public function show_product_list(){
		$data['all_product'] = $this->ProductModel->get_all_product();
		$data['main_content'] = $this->load->view('back/product_list',$data,true);
		$this->load->view('back/adminpanel',$data);
	}
	public function insert_product(){
		$product_image= $this->upload_product_image();
		if($product_image==NULL){
			redirect("Product/add_product_form");
		}else{

		$image = $this->ProductModel->add_product_model($product_image);
	$this->session->set_flashdata("flsh_msg","<font class='success'>Thêm sản phẩm thành công</font>");
		redirect('product-list');
		}
	}
	public function edit_product($product_id){
		$data['all_product'] = $this->ProductModel->edit_product_model($product_id);
		$data['all_cat'] = $this->ProductModel->get_all_category();
		$data['all_sub_cat'] = $this->ProductModel->get_all_sub_category();
		$data['all_brand'] = $this->ProductModel->get_all_brand();
		$data['main_content'] = $this->load->view('back/edit_product',$data,true);
		$this->load->view('back/adminpanel',$data);
		
	}
	private function upload_product_image(){
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'png|gif|jpg|jpeg';
        $config['max_size']             = 1000;//kb
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('pro_image')){
        	$data = $this->upload->data();
        	$image_path = "uploads/$data[file_name]";
        	return $image_path;
        }else{
        	  $error =  $this->upload->display_errors();
        	$this->session->set_userdata('error_image',$error);
        	//redirect("Product/add_product_form");
        }

	}
	public function update_product(){
		//$this->PrductModel->update_product_model();
		if($_FILES['pro_image']['name']=="" || $_FILES['pro_image']['size']==""){
			$product_image= $this->input->post('old_pro_image',true);
			$this->ProductModel->update_product_model($product_image);
			$this->session->set_flashdata("update_pro_msg","Thay đổi thành công");
			$product_id = $this->input->post('pro_id',true);
			redirect('edit-product/'.$product_id);

		}else{
			$product_id = $this->input->post('pro_id',true);
			$product_image = $this->upload_product_image();
			if($product_image==NULL){
			redirect('edit-product/'.$product_id);
			}else{
			$this->ProductModel->update_product_model($product_image);
			unlink($this->input->post('old_pro_image',true));
			$this->session->set_flashdata("update_pro_msg","Thay đổi thành công");
			redirect('edit-product/'.$product_id);
		}
			
		}

	}
	public function delete_product($product_id){
		$this->ProductModel->delete_product_model($product_id);
		$this->session->set_flashdata('product_delete','Xóa thành công');
		redirect('product-list');
    }
    public function index()
    {
        //Buoc 1:load thu vien phan trang
        $this->load->library('pagination');
        //Buoc 2:Cau hinh cho phan trang
        //lay tong so luong san pham tu trong csdl
        $total_rows = $this->product_model->get_total();
        $this->data['total_rows'] = $total_rows;
        
        $config = array();
        $config['base_url']    = base_url('product/index');
        $config['total_rows']  = $total_rows;
        $config['per_page']    = 3;
        $config['uri_segment'] = 3;
        $config['next_link']   = "Trang kế tiếp";
        $config['prev_link']   = "Trang trước";
    
        //Khoi tao phan trang
        $this->pagination->initialize($config);
    
        //lay danh sach san pham trong csdl,moi lan lay limit 3 san pham
        //$this->uri->segment(n): lay ra phan doan thu n tren link url
        $segment = $this->uri->segment(4);
        $segment = intval($segment);
        $input = array();
        $input['limit'] = array($config['per_page'], $segment);
        
        $products = $this->product_model->get_list($input);
        $this->data['list'] = $products;
    
        // Hien thi view
        // $this->data['temp'] = 'site/product/index';
        // $this->load->view('site/layout', $this->data);
    }
    

	function view()
    {


        //lay id san pham muon xem
        $id = $this->uri->rsegment(3);
       
        $product = $this->product_model->get_info($id);
       
        if(!$product) redirect();
        // lấy số điểm trung bình đánh giá
        $product->raty = ($product->rate_count > 0) ? $product->rate_total/$product->rate_count : 0;
        
        $this->data['product'] = $product;
        
        // //Get image product
        // $image_list = @json_decode($product->image_list);
        // $this->data['image_list'] = $image_list;
        
         //Update review
        $data = array();
        $data['view'] = $product->view + 1;
        $this->product_model->update($product->id, $data);
        
        // //lay thong tin cua danh mục san pham
        $category = $this->category_model->get_info($product->category_id);
        $this->data['category'] = $category;
        // 
        // 
        // 
        //Insert comment
        $date_time=date("Y-m-d H:i:s");
        //Click add comment
        if ($this->input->post('btn_submit')) {
                if (!$this->session->userdata('cus_id_login')) {
                redirect('cus/login','refresh');
        }else{
                $cus_id_login=$this->session->userdata('cus_id_login');
                $this->load->model('cus_model');
                $cus_info = $this->cus_model->get_info($cus_id_login);

        }
               
               
                $data=array(

                'cus_name'=>$cus_info->name,
                'cus_email'=>$cus_info->email,
                'content'=>$this->input->post('content'),
                'pro_id'=>$id,
                'date_time' => $date_time,
                'count_like'=>$this->input->post('count_like'),
                );
               
                $this->comment_model->create($data);
                redirect(base_url('product-details/'.$id));
    
        }
        //Click reply comment
        // if ($this->input->post('btn_reply')) {
        //     if (!$this->session->userdata('user_id_login')) {
        //         redirect('user/login','refresh');
        //     }else{
        //         $user_id_login=$this->session->userdata('user_id_login');
        //         $this->load->model('user_model');
        //         $user_info = $this->user_model->get_info($user_id_login);
        //         }
              
                
        //         $data=array(

        //         'name'=>$user_info->name,
        //         'content'=>$this->input->post('content'),
        //         'comment_id'=>$this->input->post('comment_id'),
        //         'created' => $date_time,
                
        //         );
               
        //         $this->reply_comment_model->create($data);
        //         redirect(base_url('product-details/'.$id));
        // }
        
        // Get infor comment
        
        $comment=$this->comment_model->get_comment_product($id);
        $this->data['comment'] = $comment;
             
        //Show view
        $this->data['temp'] = 'site/product-details';
        $this->load->view('site/layout', $this->data);
    }
	
	
}

?>