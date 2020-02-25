<?php

class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard - Ngantin';
        $data['menu'] = $this->model('menu_model')->getAllMenu();

        $this->view('_include/head', $data);
        $this->view('home/index', $data);
        $this->view('_include/foot');
    }
}
