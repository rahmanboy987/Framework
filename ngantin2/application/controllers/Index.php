<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $data['webname'] = '<b>NGANT</b>IN';
    }
    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('_include/head', $data);
        $this->load->view('index');
        $this->load->view('_include/foot');
    }
}
