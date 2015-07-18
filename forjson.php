<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class forjson extends CI_Model{


    public function join()


    {
        $this->db->select('*');
        $this->db->from('foods');
        $this->db->join('category', 'foods.cat_id=category.id');
        $query=$this->db->get();

        $result=array();
        $x=0;

        foreach($query->result_array() as $row)
        {
            $result[$x] = $row;
            $result[$x]['image_url']=base_url('uploads'.$row['image']);
            $x++;
        }
        return json_encode($result) ;

    }

    public function category()

    {
        $this->db->select('*');
        $this->db->from('category');
        $query=$this->db->get();

        $result=array();


        foreach($query->result_array() as $row)
        {
            $result[] = $row;

        }
        return json_encode($result) ;

    }

    public function foods()


    {
        $this->db->select('*');
        $this->db->from('foods');
        $query=$this->db->get();

        $result=array();
        $x=0;

        foreach($query->result_array() as $row)
        {
            $result[$x] = $row;
            $result[$x]['image_url']=base_url('uploads'.$row['image']);
            $x++;
        }
        return json_encode($result) ;

    }




}
