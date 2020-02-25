<?php

class Pesan extends Controller
{
    public function index($id)
    {
        if ($this->model('Menu_model')->tambahPesanan($id) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/');
            exit;
        }
    }
}
