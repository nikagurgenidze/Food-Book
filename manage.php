<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Manage extends CI_Controller{

public function __construct()
{
    parent::__construct();
    session_start();
    if( $_SESSION['is_logged']!=1)
    {
        redirect('admin/login');
    }


    $this->load->model('manage_model');
}


    public function add()

    {
        if( $_SESSION['is_logged']!=1)
        {
            redirect('admin/login');
        }

        $result = $this->manage_model->add_show();
        $data['list'] = $result;
        $this->load->view('add', $data);

    }

    public function information(){



        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());

        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $image =$data['upload_data']['file_name'];
        }


        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $data1=array(
                'cat_id' => $this->input->post('cat_id'),
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'image' => $image
            );

            if ( $this->input->post('category') )
            {
                $this->db->set('name', $this->input->post('category'));
                $this->db->insert('category');

                $data1['cat_id'] = $this->db->insert_id();


            }

            $this->manage_model->information_save($data1);



            $this->load->view('add');
            redirect('manage/add');

        }

    }

    public function login()
    {
        $this->load->view('login');

    }

}