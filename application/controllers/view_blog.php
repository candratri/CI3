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
		$data = array();

		if ($this->input->post('simpan')) {
			$upload = $this->list_blog->upload();

			if ($upload['result'] == 'success') {
				$this->list_blog->insert($upload);
				redirect('view_blog');
			}else{
				$data['message'] = $upload['error'];
			}
		}

		$this->load->view('home_view', $data);
	}
	//fungsi update
	
	public function edit($id){
		$this->load->model("tabel_view");
		$data['tipe'] = "Edit";
		$data['default'] = $this->tabel_view->get_default($id);

		if(isset($_POST['tombol_submit'])){
			$this->model_data_teman->update($_POST, $id);
			redirect("view_blog");
		}

		$this->load->view("home_view",$data);
	}


	//fungsi delete
	public function delete($id){
		$this->load->model('list_blog');
		$this->list_blog->hapus($id);
		redirect('view_blog');
	}

	
}
?>