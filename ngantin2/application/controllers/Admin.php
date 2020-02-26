<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Admin - Dashboard';
        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/index');
        $this->load->view('admin/_include/foot');
    }
    public function user_admin()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Admin - Dashboard_admin';
        $data['users'] = $this->db->get('user')->row_array();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/user_admin', $data);
        $this->load->view('admin/_include/foot');
    }
    public function toko_admin()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Admin - Dashboard_admin';
        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/toko_admin', $data);
        $this->load->view('admin/_include/foot');
    }
    public function pesanan_admin()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Admin - Dashboard_admin';
        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/pesanan_admin', $data);
        $this->load->view('admin/_include/foot');
    }
    public function pesanan_toko()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Admin - Dashboard_admin';
        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/pesanan_toko', $data);
        $this->load->view('admin/_include/foot');
    }
    public function daftar_menu()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Admin - Dashboard_admin';
        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/daftar_menu', $data);
        $this->load->view('admin/_include/foot');
    }
    public function edit_profile()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Admin - Dashboard_admin';
        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/edit_profile', $data);
        $this->load->view('admin/_include/foot');
    }
    public function lihat_menu($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Admin - Dashboard_admin';
        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/lihat_menu', $data);
        $this->load->view('admin/_include/foot');
    }
}
