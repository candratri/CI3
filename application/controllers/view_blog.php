<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class view_blog extends CI_Controller {

	public function index()
	{
		$this->load->model('list_blog');
		$data['artikel'] = $this->list_blog->get_artikels();
		$this->load->view('home_view', $data);
	}

	public function detail($id)
	{
		$this->load->model('list_blog');
		$data['detail'] = $this->list_blog->get_single($id);
		$this->load->view('home_detail', $data);
	}

	// Membuat fungsi create
	public function tambah()
	{

		$this->load->model('list_blog');
		$this->load->model('list_category');
		 $data = array();		
		 $data['topik'] = $this->list_category->get_all_categories();
  
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('input_judul', 'Judul', 'required', array('required' => 'isi %s .'));
		 $this->form_validation->set_rules('input_content','Content','required',array('required' => 'isi %s.'));

		 if($this->form_validation->run()==FALSE){
		 	$this->load->view('tambah', $data);
		 }
		 else
		 {
		 	if ($this->input->post('simpan')) {
			$upload = $this->list_blog->upload();

			if ($upload['result'] == 'success') {
				$this->list_blog->insert($upload);
				redirect('view_blog');
			}else{
				$data['message'] = $upload['error'];
			}
		 }
		 $this->load->view('tambah', $data);
		}
	}
	//fungsi update
	
	public function edit($id){
		$this->load->model("list_blog");
		$data['tipe'] = "Edit";
		$data['default'] = $this->list_blog->get_default($id);
		$this->load->model('list_category');
		 $data = array();		
		 $data['topik'] = $this->list_category->get_all_categories();

		if(isset($_POST['simpan'])){
			$this->list_blog->update($_POST, $id);
			redirect("view_blog");
		}

		$this->load->view("tabel_view",$data);
	}


	//fungsi delete
	public function delete($id){
		$this->load->model('list_blog');
		$this->list_blog->hapus($id);
		redirect('view_blog');
	}

	
}
?>