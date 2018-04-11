	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class list_blog extends CI_Model {

		public function get_artikels(){
			$query = $this->db->get('blog');
			return $query->result();
		}	

		public function get_single($id)
		{
			$query = $this->db->query('select * from blog where id_blog='.$id);
			return $query->result();
		}
		public function upload()
		{
			$config['upload_path'] = './gambar/';
			$config['allowed_types'] = 'jpg|png';
			$config['max_size']  = '2048';
			$config['remove_space']  = TRUE;
			
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('input_gambar')){
				$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
				return $return;
			} else {
				$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
				return $return;
			}
		}

		public function insert($upload)
		{
			$data = array(
				'id_blog' => '',
				'judul_blog' => $this->input->post('input_judul'),
				'tgl_blog' => $this->input->post('input_tanggal'),
				'content' => $this->input->post('input_content'),
				'gambar_blog' => $upload['file']['file_name']
			);

			$this->db->insert('blog', $data);
		}

	// public function upload(){
	// 	$config['upload_path'] = './gambar/';
	// 	$config['allowed_types'] = 'jpg|png|jpeg';
	// 	$config['max_size']	= '2048';
	// 	$config['remove_space'] = TRUE;
	
	// 	$this->load->library('upload', $config); // Load konfigurasi uploadnya
	// 	if($this->upload->do_upload('gambar_blog')){ // Lakukan upload dan Cek jika proses upload berhasil
	// 		// Jika berhasil :
	// 		$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
	// 		return $return;
	// 	}else{
	// 		// Jika gagal :
	// 		$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
	// 		return $return;
	// 	}
	// }
	
	// Fungsi untuk menyimpan data ke database
	public function save($upload){
		$data = array(
			'id_blog' => $this->input->post('null'),
			'judul_blog' => $this->input->post('judul_atk'),
			'tanggal_blog' => $this->input->post('tggl_atk'),
			'content' => $this->input->post('isi_atk'),
			'gambar_blog' => $upload['file']['file_name']		
		);
		
		$this->db->insert('nama', $data);
	}


		//fungsi delete
		public function hapus($id){
			$query = $this->db->query('DELETE from blog WHERE id_blog= '.$id);
		}
	}