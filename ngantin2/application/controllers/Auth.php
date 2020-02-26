<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['verified'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nama' => $user['nama'],
                        'email' => $user['email'],
                        'level' => $user['level']
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                } else {
                    $this->session->set_flashdata('message', '
                    <div class="alert alert-danger" role="alert">
                    Wrong password!
                    </div>
                ');
                }
            } else {
                $this->session->set_flashdata('message', '
                <div class="alert alert-danger" role="alert">
                Email is not activated!
                </div>
                ');
            }
        } else {
            $this->session->set_flashdata('message', '
            <div class="alert alert-danger" role="alert">
            Email is not registered!
            </div>
            ');
        }

        redirect('auth/login');
    }

    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Here';
            $this->load->view('_include/head', $data);
            $this->load->view('auth/login');
            $this->load->view('_include/foot');
        } else {
            $this->_login();
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|min_length[6]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register Here';
            $this->load->view('_include/head', $data);
            $this->load->view('auth/register');
            $this->load->view('_include/foot');
        } else {
            date_default_timezone_set('Asia/Jakarta');
            $data = [
                'nama' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpeg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'level' => '1',
                'verified' => '1',
                'date_created' => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '
            <div class="alert alert-success" role="alert">
            Your account has been registered!
            </div>
            ');
            redirect('auth/login');
        }
    }

    public function forgot()
    {
        $data['title'] = 'Forgot Here';
        $this->load->view('_include/head', $data);
        $this->load->view('auth/forgot');
        $this->load->view('_include/foot');
    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('level');

        $this->session->set_flashdata('message', '
        <div class="alert alert-success" role="alert">
        You have been logged out!
        </div>
        ');
        redirect('auth/login');
    }
}
