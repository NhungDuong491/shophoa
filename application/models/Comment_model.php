<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment_model extends CI_Model {

	public $table = 'tbl_comment';

	public function __construct()
	{
		parent::__construct();
		
	}
	function xoa($id)
	{
		$this->db->where('id_bl', $id);
		$this->db->delete($this->table);
	}
	function capnhat($id,$data)
	{
		$this->db->where('id_bl', $id);
		$this->db->update($this->table,$data);
	}
	function get_comment_product($id)
	{
		$this->db->where('product_id', $id);
		return $this->db->get($this->table)->result();
	}
	

 

}

/* End of file baocao_model.php */
/* Location: ./application/models/baocao_model.php */