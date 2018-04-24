	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class list_category extends CI_Model {

		public function get_categorys(){
			$query = $this->db->get('category');
			return $query->result();
		}	

		public function get_single($id)
		{
			$query = $this->db->query('select * from blog where id_blog='.$id);
			return $query->result();
		}

		public function get_default($id)
		{
			$data = array();
	  		$options = array('id_blog' => $id);
	  		$Q = $this->db->get_where('blog',$options,1);
	    		if ($Q->num_rows() > 0){
	      			$data = $Q->row_array();
	   			}
	  		$Q->free_result();
	 		return $data;
		}



		public function upload()
		{
			$config['max_size']  = '2048';
			$config['remove_space']  = TRUE;
			
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('input_name')){
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
				'id_cat' => '',
				'name_cat' => $this->input->post('input_name'),
				'description_cat' => $this->input->post('input_name'),
				'tgl_cat' => $this->input->post('input_tanggal')
				
			);

			$this->db->insert('category', $data);
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
			'jenis_blog' => $this->input->post('jenis_atk'),
			'pengarang_blog' => $this->input->post('pengarang_atk'),
			'email_blog' => $this->input->post('email_atk'),
			'gambar_blog' => $upload['file']['file_name']
			
		);
		
		$this->db->insert('nama', $data);
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$judul_atk = $this->db->escape($post['judul_atk']);
		$isi_atk = $this->db->escape($post['isi_atk']);
		$tggl_atk = $this->db->escape($post['tggl_atk']);
		$jenis_atk = $this->db->escape($post['jenis_atk']);
		$pengarang_atk = $this->db->escape($post['pengarang_atk']);
		$email_atk = $this->db->escape($post['email_atk']);
		$sql = $this->db->query("UPDATE blog SET judul_blog = $judul_atk, tgl_blog = $tggl_atk, content = $isi_atk, jenis_blog = $jenis_atk, pengarang_blog = $pengarang_atk, email_blog = $email_atk WHERE id_blog = ".intval($id));
		return true;
	}


		//fungsi delete
		public function hapus($id){
			$query = $this->db->query('DELETE from blog WHERE id_blog= '.$id);
		}
	}