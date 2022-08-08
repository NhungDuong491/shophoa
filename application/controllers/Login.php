<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index(){
		if (isset($this->session->userid)) {
		redirect('Admin/admindashboard');
		} else {
			$this->load->view('login');
		}	
	}
	public function checklogin(){
		$data = array();
		$useremail = $this->input->post('user_email',TRUE);
		$userpassword = $this->input->post('user_password',TRUE);
		//$encryppass = password_hash($userpassword,PASSWORD_DEFAULT);
		$this->load->model('LoginModel');
		$user_details = $this->LoginModel->checkuserlogin($useremail);
		if(password_verify($userpassword,$user_details->user_password)){
			if ($user_details->user_status == 1) {
				$session_data['userid'] 	= $user_details->user_id;
				$session_data['username']	= $user_details->username;
				$session_data['useremail']	= $user_details->user_email;
				$session_data['userrole'] 	= $user_details->user_role;
				$session_data['userstatus']	= $user_details->user_status;
				$this->session->set_userdata($session_data);
				redirect("Admin");
			} else {
				$data['error_message'] = "Bạn không phải là người dùng đang hoạt động ...!";
				$this->load->view('login',$data);
			}
		}else{
			redirect('Login/login_error');
		}
	}
	public function login_error(){
		$data['error_message'] = "Tên đăng nhập hoặc mật khẩu không chính xác...! ";
			$this->load->view('login',$data);
	}
	public function adminlogout(){
		$this->session->sess_destroy();
		$data['success_message'] = "Đăng xuất thành công...!";
		$this->load->view('login',$data);	
	}
	
}
