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



}

