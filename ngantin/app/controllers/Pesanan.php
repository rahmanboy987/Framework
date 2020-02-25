<?php

class Pesanan  extends Controller
{
    public function index()
    {
        $data['title'] = 'Daftar Pesanan';
        $data['pesanan'] = $this->model('Pesanan_model')->getAllPesanan();

        $this->view('_include/head', $data);
        $this->view('pesanan/index', $data);
        $this->view('_include/foot');
    }

    public function hapus($id)
    {
        if ($this->model('Pesanan_model')->hapusPesanan($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/pesanan');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/pesanan');
            exit;
        }
    }
}
