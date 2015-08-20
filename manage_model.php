<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_model extends CI_Model{




    public function add_show()
    {
        $this->db->select('*');
        $this->db->from('category');
        $query=$this->db->get();

        foreach($query->result_array() as $row)
        {
            $list[] = $row;
        }
        return $list;



    }

    public function information_save ($data)
    {

        $this->db->insert('foods', $data);

    }

    public function list_show()
    {

        $this->db->select('foods.*, category.name as category_name');
        $this->db->join('category', 'category.id=foods.cat_id');
        $this->db->from('foods');
        $query = $this->db->get();

        foreach ($query->result_array() as $row) {
            $list[] = $row;
        }
        return $list;

    }


    public function update ($data, $id)
    {

        $this->db->where('foods.id', $id);
        $this->db->update('foods', $data);

    }

    public function edit ($id)
    {

        $this->db->select('foods.*, category.name as category_name');
        $this->db->join('category', 'category.id=foods.cat_id');
        $this->db->from('foods');
        $this->db->where('foods.id', $id);
        $query=$this->db->get();
        $i=$query->row_array();
        return $i;
    }



    public function category_update ( $id, $name, $name_en, $image)
    {

    if(!empty($name)){
        $this->db->set('name', $name);
}
    if (!empty($name_en)){
        $this->db->set('name_en', $name_en);
    }
    elseif(!empty(image)){
        $this->db->set('image', $image);
    }
        $this->db->from('category');
        $this->db->where('id', $id);
        $this->db->update('category');

    }




    public function rating ($data){


             $this->db->insert('rating', $data);

        $this->db->select('rating, votenumber');
        $this->db->where('id', $data['food_id']);
        $food = $this->db->get('foods')->row_array();

        if ( ! empty( $food ) )
        {
            $newRating = (($food['rating']*$food['votenumber']) + $data['rating']) / ($food['votenumber']+1);

            $this->db->set('votenumber', 'votenumber + 1', FALSE);
            $this->db->set('rating', $newRating);
            $this->db->where('id', $data['food_id']);
            $this->db->update('foods');
        }


    }








}

