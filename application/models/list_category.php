	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class list_category extends CI_Model {

		public function get_categorys(){
			$query = $this->db->get('category');
			return $query->result();
		}	

		public function get_all_categories()
		{
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
			'id_cat' => $this->input->post('null'),
			'name_cat' => $this->input->post('name_atk'),
			'description_cat' => $this->input->post('description_atk'),
			'tgl_cat' => $this->input->post('tggl_atk')
			
		);
		
		$this->db->insert('category', $data);
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$name_atk = $this->db->escape($post['name_atk']);
		$description_atk = $this->db->escape($post['desciption_atk']);
		$tggl_atk = $this->db->escape($post['tggl_atk']);
		$sql = $this->db->query("UPDATE category SET name_cat = $name_atk, description_cat = $description_atk, tgl_cat = $tggl_atk WHERE id_cat = ".intval($id));
		return true;
	}


		//fungsi delete
		public function hapus($id){
			$query = $this->db->query('DELETE from category WHERE id_cat= '.$id);
		}
	}