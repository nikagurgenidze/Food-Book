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
        $result = $this->manage_model->add_show();
        $data['list'] = $result;
        $this->load->view('add', $data);

    }

    function row_delete($id) {
        $result=$this->db->where('id', $id);
        $data['list'] = $result;
        $this->db->delete('foods');
        redirect('manage/show');

    }
    function cat_delete($id) {
        $result=$this->db->where('id', $id);
        $data['list'] = $result;
        $this->db->delete('category');
        redirect('manage/category');

    }



    public function category()

    {

        $result = $this->manage_model->add_show();
        $data['list'] = $result;
        $this->load->view('cat_edit', $data);

    }

    public function category_update(){

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

        $this->manage_model->category_update($this->input->post('cat_id'), $this->input->post('category'), $this->input->post('category_en'), $image);
        redirect('manage/category');
    }




    public function show()
    {
        $result=$this->manage_model->list_show();
        $data['list'] = $result;
        $this->load->view('list', $data);

    }

    public function update($id)
    {
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
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = array(
                'foods.cat_id' => $this->input->post('cat_id'),
                'foods.name' => $this->input->post('name'),
                'foods.name_en' => $this->input->post('name_en'),
                'foods.description' => $this->input->post('description'),
                'foods.description_en' => $this->input->post('description_en'),
                'foods.recipe' => $this->input->post('recipe'),
                'foods.recipe_en' => $this->input->post('recipe_en'),
//                'foods.image' => $image
            );

        if(!empty($image)){
               $data['foods.image']=$image;
            }


            $this->manage_model->update($data, $id);
        }

        $result = $this->manage_model->add_show();
        $data['list'] = $result;

        $result=$this->manage_model->edit($id);
        print_r($result);
        $data['id']=$result;
        $this->load->view('update',$data);



 }




    public function rating()
    {

print($_SERVER['REQUEST_METHOD']);
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {

            echo 'nika';



            $data = array(
                'rating' =>$this->input->get('rating'),
                'user_id'=>$this->input->get('user_id'),
                'food_id' => $this->input->get('food_id'),

            );
            $this->manage_model->rating($data);
        }
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



            if ( $this->input->post('category') )
            {
                $this->db->set('name', $this->input->post('category'));
                $this->db->set('image', $image);
                $this->db->insert('category');

                $data1['cat_id'] = $this->db->insert_id();


            }else{
                $data1=array(
                    'cat_id' => $this->input->post('cat_id'),
                    'name' => $this->input->post('name'),
                    'name_en' => $this->input->post('name_en'),
                    'description' => $this->input->post('description'),
                    'description_en' => $this->input->post('description_en'),
                    'recipe' => $this->input->post('recipe'),
                    'recipe_en' => $this->input->post('recipe_en'),
                    'image' => $image
                );
                $this->manage_model->information_save($data1);
            }





            $this->load->view('add');
            redirect('manage/add');

        }

    }

    public function login()
    {
        $this->load->view('login');

    }

}