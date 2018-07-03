<?php defined('BASEPATH') OR exit('No direct script access allowed');



class User_model extends CI_Model {



    // function __construct(){

    //     parent::__construct();

    // }

public function get_artikels(){
            $query = $this->db->get('users');
            return $query->result();
        }   

        public function get_single($id)
        {
            $query = $this->db->query('select * from users where user_id='.$id);
            return $query->result();

            // $this->db->select('*');
            // $this->db->from('user');
            // $this->db->join('category', 'blog.fk_id_cat = category.id_cat');
            // $this->db->where('blog.id_blog='.$id);
            return $this->db->get()->result();
        }

        public function get_total()
        {
            return $this->db->count_all("users");
        }

        public function get_all_blogs($limit = FALSE, $offset = FALSE)
        {
            if ($limit) {
                $this->db->limit($limit, $offset);
            }

            $this->db->order_by('users.user_id', 'DESC');

            $query = $this->db->get('users');
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
                'user_id' => '',
                'fk_level_id' => $this->input->post('input_judul'),
                'nama' => $this->input->post('input_tanggal'),
                'kodepos' => $this->input->post('input_content'),
                'email' => $this->input->post('input_jenis'),
                'username' => $this->input->post('input_pengarang'),
                'password' => $this->input->post('id_cat')
                
            );

            $this->db->insert('users', $data);
        }

    // public function upload(){
    //  $config['upload_path'] = './gambar/';
    //  $config['allowed_types'] = 'jpg|png|jpeg';
    //  $config['max_size'] = '2048';
    //  $config['remove_space'] = TRUE;
    
    //  $this->load->library('upload', $config); // Load konfigurasi uploadnya
    //  if($this->upload->do_upload('gambar_blog')){ // Lakukan upload dan Cek jika proses upload berhasil
    //      // Jika berhasil :
    //      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
    //      return $return;
    //  }else{
    //      // Jika gagal :
    //      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
    //      return $return;
    //  }
    // }
    
    // Fungsi untuk menyimpan data ke database
    public function save($upload){
        $data = array(
            'user_id' => $this->input->post('null'),
            'fk_level_id' => $this->input->post('membership'),
            'nama' => $this->input->post('nama'),
            'kodepos' => $this->input->post('kodepos'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password
            
            
            
        );
        
        $this->db->insert('nama', $data);
    }

    public function update($post, $id){
        //parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
        $level_atk = $this->db->escape($post['level_atk']);
        $nama_atk = $this->db->escape($post['nama_atk']);
        $kodepos_atk = $this->db->escape($post['kodepos_atk']);
        $email_atk = $this->db->escape($post['email_atk']);
        $username_atk = $this->db->escape($post['username_atk']);
        $password_atk = $this->db->escape($post['password_atk']);
        $sql = $this->db->query("UPDATE users SET fk_level_id = $level_atk, nama = $nama_atk, kodepos = $kodepos_atk, email = $email_atk, username = $username_atk, password = $password_atk WHERE user_id = ".intval($id));
        return true;
    }

        public function get_default($id)
        {
            $data = array();
            $options = array('user_id' => $id);
            $Q = $this->db->get_where('users',$options,1);
                if ($Q->num_rows() > 0){
                    $data = $Q->row_array();
                }
            $Q->free_result();
            return $data;
        }


        //fungsi delete
        public function hapus($id){
            $query = $this->db->query('DELETE from users WHERE user_id= '.$id);
        }



    
       


    public function register($enc_password){

        // Array data user 

        $data = array(

            'nama' => $this->input->post('nama'),

            'email' => $this->input->post('email'),

            'username' => $this->input->post('username'),

            'password' => $enc_password,

            'kodepos' => $this->input->post('kodepos'),
            'fk_level_id' => $this->input->post('membership')

        );



        // Insert user

        return $this->db->insert('users', $data);

    }



    // Proses login user

    public function login($username, $password){

        // Validasi

        $this->db->where('username', $username);

        $this->db->where('password', $password);



        $result = $this->db->get('users');





        if($result->num_rows() == 1){

            return $result->row(0)->user_id;

        } else {

            return false;

        }

    }

    //fungsi level user
    function get_user_level($user_id)
    {
        //mendapatkan data user
        $this->db->select('fk_level_id');

        $this->db->where('user_id', $user_id);



        $result = $this->db->get('users');





        if($result->num_rows() == 1){

            return $result->row(0)->fk_level_id ;

        } else {

            return false;

        }

    }
    function get_user_details($user_id)
    {
        $this->db->join('levels', 'levels.level_id = users.fk_level_id', 'left');
        $this->db->where('user_id', $user_id);


        $result = $this->db->get('users');


        if($result->num_rows() == 1){

            return $result->row() ;

        } else {

            return false;

        }
    }

    function get_level_name($level_id)
    {
        $this->db->select('nama_level');
         $this->db->where('level_id', $level_id);


        $result = $this->db->get('levels');


        if($result->num_rows() == 1){

            return $result->row(0) ;

        } else {

            return false;

        }
    }
}