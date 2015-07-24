<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        session_start();


    }

    public function login()
    {


        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {

            $this->db->where('username', $this->input->post('username'));
            $this->db->where('password', sha1($this->input->post('password')));
            $query=$this->db->get('admin');

            $check=$query->num_rows();

            if($check > 0)
            {
                $_SESSION['is_logged']=1;
                redirect('manage/add');


            }

        }
        $this->load->view('login');
    }

    public function logout()
    {
        session_destroy();
        redirect('admin/login');
    }





}