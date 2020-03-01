<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
        $this->data['user'] = $this->Admin_model->get_session();
    }
    public function index()
    {
        $data['title'] = 'Admin - Dashboard';

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side', $this->data);
        $this->load->view('admin/index');
        $this->load->view('admin/_include/foot');
    }
    public function user_admin()
    {
        $data['title'] = 'Admin - Dashboard_admin';
        $data['all_user'] = $this->Admin_model->get_all_user();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side', $this->data);
        $this->load->view('admin/user_admin', $data);
        $this->load->view('admin/_include/foot');
    }
    public function toko_admin()
    {
        $data['title'] = 'Admin - Dashboard_admin';
        $data['all_toko'] = $this->Admin_model->get_all_toko();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side', $this->data);
        $this->load->view('admin/toko_admin', $data);
        $this->load->view('admin/_include/foot');
    }
    public function pesanan_admin()
    {
        $data['title'] = 'Admin - Dashboard_admin';
        $data['all_pesanan'] = $this->Admin_model->get_all_pesanan();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side', $this->data);
        $this->load->view('admin/pesanan_admin', $data);
        $this->load->view('admin/_include/foot');
    }
    public function pesanan_toko()
    {
        $data['title'] = 'Admin - Dashboard_admin';
        $data['all_pesanan'] = $this->Admin_model->get_all_pesanan();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side', $this->data);
        $this->load->view('admin/pesanan_toko', $data);
        $this->load->view('admin/_include/foot');
    }
    public function daftar_menu()
    {
        $data['title'] = 'Admin - Dashboard_admin';
        if (($this->input->post('tambah_menu')) !== null) {
            $this->Admin_model->add_menu($this->data['user']);
            redirect('admin/daftar_menu');
        } else {
            $data['all_menu_byid'] = $this->Admin_model->get_all_menu_by_id($this->data['user']);

            $this->load->view('admin/_include/head', $data);
            $this->load->view('admin/_include/nav');
            $this->load->view('admin/_include/side', $this->data);
            $this->load->view('admin/daftar_menu', $data);
            $this->load->view('admin/_include/foot');
        }
    }
    public function edit_profile()
    {
        if (($this->input->post('edit_profile')) !== null) {
            $this->Admin_model->update_profile_by_id($this->data['user']);
            redirect('admin/edit_profile');
        } else {
            $data['title'] = 'Admin - Dashboard_admin';

            $this->load->view('admin/_include/head', $data);
            $this->load->view('admin/_include/nav');
            $this->load->view('admin/_include/side', $this->data);
            $this->load->view('admin/edit_profile', $data);
            $this->load->view('admin/_include/foot');
        }
    }
    public function daftar_toko()
    {
        $data['title'] = 'Admin - Dashboard_admin';
        $data['all_toko'] = $this->Admin_model->get_all_toko();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side', $this->data);
        $this->load->view('admin/daftar_toko', $data);
        $this->load->view('admin/_include/foot');
    }
    public function lihat_menu($id = null)
    {
        $data['title'] = 'Admin - Lihat Menu';

        if ($this->input->post('pesan_menu') !== null) {
            $data['all_menu'] = $this->Admin_model->pesan_menu($this->data['user']);
            redirect('admin/lihat_menu');
        } else {

            if ($id == null) {
                $data['all_menu'] = $this->Admin_model->get_all_menu();
            } else {
                $data['all_menu'] = $this->Admin_model->get_all_menu_pesan($id);
            }
            $this->load->view('admin/_include/head', $data);
            $this->load->view('admin/_include/nav');
            $this->load->view('admin/_include/side', $this->data);
            $this->load->view('admin/lihat_menu', $data);
            $this->load->view('admin/_include/foot');
        }
    }
    public function hapus_user($id)
    {
        $this->Admin_model->delete_user_by_id($id);
        redirect('admin/user_admin');
    }
    public function hapus_menu($id)
    {
        $this->Admin_model->delete_menu_by_id($id);
        redirect('admin/daftar_menu');
    }
    public function hapus_toko()
    {
        $this->Admin_model->update_toko_by_id($this->data['user']);
        redirect('admin/toko_admin');
    }
}
