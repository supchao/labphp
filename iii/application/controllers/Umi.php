<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umi extends CI_Controller {


	public function index(){
        $data['corpname'] = 'brad big company';


        $query =  $this->db->query("select * from product");
        $num = $query->num_rows();

        $data['title'] = "welcont : {$num}";

        if($this->input->get('x') != null && $this->input->get('y') != null){
            $x = $this->input->get('x');
            $y = $this->input->get('y');
            $result = $x + $y;

            $data['x'] = $x;
            $data['y'] = $y;
            $data['result'] = $result;

            $this->load->view('temps/header',$data);
            $this->load->view('umi',$data);
            $this->load->view('temps/footer');

        }else{
            $this->load->view('temps/header',$data);
            $this->load->view('umi2');
            $this->load->view('temps/footer');
        }
	}
}
