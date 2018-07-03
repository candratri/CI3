<?php

defined('BASEPATH') or exit('No direct script access allowed');



class User extends CI_Controller{



	public function __construct()

	{

		parent::__construct();

				

		$this->load->library('form_validation');

		$this->load->helper('MY');

		$this->load->model('User_model');

	}

	
	public function index()
	{
		$this->load->model('User_model');
		//$data['artikel'] = $this->list_blog->get_artikels();

		$limit_per_page = 6;
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$total_records = $this->User_model->get_total();

		if  ($total_records > 0) {


			$data["artikel"] = $this->User_model->get_all_blogs($limit_per_page, $start_index);

			

			$config['base_url'] = base_url() . 'User/index';

			$config['total_rows'] = $total_records;

			$config['per_page'] = $limit_per_page;

			$config["uri_segment"] = 3;

			

			$this->pagination->initialize($config);

				

			// Buat link pagination

			$data["links"] = $this->pagination->create_links();
			
			$this->load->view('home_user', $data);
		}
	}



	// Membuat fungsi create
	public function tambah()
	{

		$this->load->model('User_model');
		 $data = array();		
  
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('input_name', 'Name', 'required', array('required' => 'isi %s .'));
		 $this->form_validation->set_rules('input_description','Description','required',array('required' => 'isi %s.'));

		 if($this->form_validation->run()==FALSE){
		 	$this->load->view('tabel_user');
		 }
		 else
		 {
		 	if ($this->input->post('simpan')) {
				$this->list_category->insert();
				redirect('home_user');

		 }
		 $this->load->view('templates/header');
		 $this->load->view('tabel_user', $data);
		 $this->load->view('templates/footer');
		}
	}
	//fungsi update
	
	public function edit($id){
		$this->load->model("User_model");
		$data['tipe'] = "Edit";
		$data['default'] = $this->User_model->get_default($id);
		// $this->load->model('User_model');
		//  $data = array();		
		//  $data['topik'] = $this->User_model->get_all_categories();

		if(isset($_POST['simpan'])){
			$this->User_model->update($_POST, $id);
			redirect("User");
		}

		$this->load->view("tabel_user",$data);
	}


	//fungsi delete
	public function delete($id){
		$this->load->model('User_model');
		$this->User_model->hapus($id);
		redirect('User');
	}
	// Register user

	public function register(){

		$data['page_title'] = 'Pendaftaran User';



		$this->form_validation->set_rules('nama', 'Nama', 'required');

		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');

		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

		$this->form_validation->set_rules('password', 'Password', 'required');

		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'matches[password]');



		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');

			$this->load->view('users/register', $data);

			$this->load->view('templates/footer');

		} else {

			// Encrypt password

			$enc_password = md5($this->input->post('password'));



			$this->User_model->register($enc_password);



			// Set message

			$this->session->set_flashdata('user_registered', 'Anda telah teregistrasi.');



			redirect('home');

		}

	}


	//untuk memanggil sesion level 
	public function get_userdata(){
        $userData = $this->session->userdata();
        return $userData;
    }


	// Log in user

	public function login(){

		$data['page_title'] = 'Log In';



		$this->form_validation->set_rules('username', 'Username', 'required');

		$this->form_validation->set_rules('password', 'Password', 'required');



		if($this->form_validation->run() === FALSE){

			$this->load->view('templates/header');

			$this->load->view('users/login', $data);

			$this->load->view('templates/footer');

		} else {

			

	// Get username

	$username = $this->input->post('username');

	// Get & encrypt password

	$password = md5($this->input->post('password'));



	// Login user

	$user_id = $this->User_model->login($username, $password);



	if($user_id){

		// Buat session

		$user_data = array(

			'user_id' => $user_id,

			'username' => $username,

			'logged_in' => true,

			'fk_level_id' => $this->User_model->get_user_level($user_id),
		);



		$this->session->set_userdata($user_data);



		// Set message

		$this->session->set_flashdata('user_loggedin', 'Anda sudah login');



		redirect('User/dashboard');

	} else {

		// Set message

		$this->session->set_flashdata('login_failed', 'Login invalid');



		redirect('User/login');

	}
	}		
}
	

	// Log user out

	public function logout(){

		// Unset user data

		$this->session->unset_userdata('logged_in');

		$this->session->unset_userdata('user_id');

		$this->session->unset_userdata('username');



		// Set message

		$this->session->set_flashdata('user_loggedout', 'Anda sudah log out');



		redirect('User/login');

	}

	function dashboard()
	{

		// Must login

		if(!$this->session->userdata('logged_in')) 

			redirect('users/login');



		$user_id = $this->session->userdata('user_id');



		// Dapatkan detail dari User

		$data['user'] = $this->User_model->get_user_details($user_id);



		// Load view
		$userData = $this->get_userdata();
        if ($userData['fk_level_id'] === '1'){
            $this->load->view('templates/header');
            $this->load->view('users/user1', $data);
            $this->load->view('templates/footer');
        } else if ($userData['fk_level_id'] === '2'){
            $this->load->view('templates/header');
            $this->load->view('users/user2', $data);
            $this->load->view('templates/footer');
        } else if ($userData['fk_level_id'] === '3') {
			$this->load->view('templates/header', $data, FALSE);
			$this->load->view('users/dashboard', $data, FALSE);
			$this->load->view('templates/footer', $data, FALSE);
	}

		}
	}