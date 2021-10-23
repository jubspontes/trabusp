<?php
defined('BASEPATH') 
OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
	public function index()
	{
		$data['titulo'] ='esse e o titulo';
        $data['users'] = $this->login_model->getUsersList();
        $this->load->view('includes/html_header',$data);
        $this->load->view ('includes/html_navbar');
        $data['subtitulo'] ='esse e um subtitulo';
        $this->load->view('nova_pagina');
        $this ->load->view('includes/html_footer');
        
	}
}