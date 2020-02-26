<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
    }
    public function index()
    {
        $data['title'] = 'Admin - Dashboard';

        $data['user'] = $this->Admin_model->get_session();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side', $data);
        $this->load->view('admin/index');
        $this->load->view('admin/_include/foot');
    }
    public function user_admin()
    {
        $data['title'] = 'Admin - Dashboard_admin';

        $data['user'] = $this->Admin_model->get_session();
        $data['all_user'] = $this->Admin_model->get_all_user();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/user_admin', $data);
        $this->load->view('admin/_include/foot');
    }
    public function toko_admin()
    {
        $data['title'] = 'Admin - Dashboard_admin';

        $data['user'] = $this->Admin_model->get_session();
        $data['all_toko'] = $this->Admin_model->get_all_toko();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/toko_admin', $data);
        $this->load->view('admin/_include/foot');
    }
    public function pesanan_admin()
    {
        $data['title'] = 'Admin - Dashboard_admin';

        $data['user'] = $this->Admin_model->get_session();
        $data['all_pesanan'] = $this->Admin_model->get_all_pesanan();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/pesanan_admin', $data);
        $this->load->view('admin/_include/foot');
    }
    public function pesanan_toko()
    {
        $data['title'] = 'Admin - Dashboard_admin';

        $data['user'] = $this->Admin_model->get_session();
        $data['pesanan_byid'] = $this->Admin_model->get_pesanan_by_id($data['user']);

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/pesanan_toko', $data);
        $this->load->view('admin/_include/foot');
    }
    public function daftar_menu()
    {
        $data['title'] = 'Admin - Dashboard_admin';
        $data['user'] = $this->Admin_model->get_session();

        if (($this->input->post('tambah_menu')) !== null) {
            $this->Admin_model->add_menu($data['user']);
            redirect('admin/daftar_menu');
        } else {
            $data['all_menu_byid'] = $this->Admin_model->get_all_menu_by_id($data['user']);

            $this->load->view('admin/_include/head', $data);
            $this->load->view('admin/_include/nav');
            $this->load->view('admin/_include/side');
            $this->load->view('admin/daftar_menu', $data);
            $this->load->view('admin/_include/foot');
        }
    }
    public function edit_profile()
    {
        $data['user'] = $this->Admin_model->get_session();

        if (($this->input->post('edit_profile')) !== null) {
            $this->Admin_model->update_profile_by_id($data['user']);
            redirect('admin/edit_profile');
        } else {
            $data['title'] = 'Admin - Dashboard_admin';

            $this->load->view('admin/_include/head', $data);
            $this->load->view('admin/_include/nav');
            $this->load->view('admin/_include/side');
            $this->load->view('admin/edit_profile', $data);
            $this->load->view('admin/_include/foot');
        }
    }
    public function lihat_menu($id)
    {
        $data['title'] = 'Admin - Dashboard_admin';

        $data['user'] = $this->Admin_model->get_session();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/lihat_menu', $data);
        $this->load->view('admin/_include/foot');
    }
    public function hapus_user($id)
    {
        $data['user'] = $this->Admin_model->get_session();
        $this->Admin_model->delete_user_by_id($id);
        redirect('admin/user_admin');
    }
    public function hapus_toko()
    {
        $data['user'] = $this->Admin_model->get_session();
        $this->Admin_model->update_toko_by_id($data['user']);
        redirect('admin/toko_admin');
    }
    public function hapus_menu($id)
    {
        $data['user'] = $this->Admin_model->get_session();
        $this->Admin_model->delete_menu_by_id($id);
        redirect('admin/daftar_menu');
    }
    public function daftar_toko()
    {
        $data['title'] = 'Admin - Dashboard_admin';

        $data['user'] = $this->Admin_model->get_session();
        $data['all_toko'] = $this->Admin_model->get_all_toko();

        $this->load->view('admin/_include/head', $data);
        $this->load->view('admin/_include/nav');
        $this->load->view('admin/_include/side');
        $this->load->view('admin/daftar_toko', $data);
        $this->load->view('admin/_include/foot');
    }
    public function pesan_menu()
    {
        $data['title'] = 'Admin - Dashboard_admin';
        $data['user'] = $this->Admin_model->get_session();

        if (($this->input->post('tambah_menu')) !== null) {
            $this->Admin_model->add_menu($data['user']);
            redirect('admin/daftar_menu');
        } else {
            $data['all_menu_byid'] = $this->Admin_model->get_all_menu_by_id($data['user']);

            $this->load->view('admin/_include/head', $data);
            $this->load->view('admin/_include/nav');
            $this->load->view('admin/_include/side');
            $this->load->view('admin/pesan_menu', $data);
            $this->load->view('admin/_include/foot');
        }
    }
}
