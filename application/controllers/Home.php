<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('tampilan_home');
        $this->load->view('templates/footer');
    }
}
