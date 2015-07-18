<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class json extends CI_Controller{

    public function joined(){

        $this->load->model('forjson');
        $join=$this->forjson->join();
        print_r($join);

    }

    public function category(){

        $this->load->model('forjson');
        $cat=$this->forjson->category();
        print_r($cat);

    }

    public function foods(){

        $this->load->model('forjson');
        $food=$this->forjson->foods();
        print_r($food);

    }






}