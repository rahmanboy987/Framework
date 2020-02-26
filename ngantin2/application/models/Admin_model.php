<?php

class Admin_model extends CI_Model
{
    public function get_session()
    {
        $query = $this->db->get_where('user', ['email' => $this->session->userdata('email')]);
        return $query->row_array();
    }
    public function get_all_user()
    {
        $query = $this->db->get('user');
        return $query->result();
    }
    public function get_all_toko()
    {
        $query = $this->db->where('nama_toko !=', '')->get('user');
        return $query->result();
    }
    public function get_menu_by_id($id)
    {
        $query = $this->db->where('id', $id)->get('menu');
        return $query->result();
    }
    public function get_all_pesanan()
    {
        $query = $this->db->get('pesanan');
        return $query->result();
    }
    public function get_pesanan_by_id($user)
    {
        $query = $this->db->where('id', $user['id'])->get('pesanan');
        return $query->result();
    }
    public function delete_user_by_id($id)
    {
        $query = $this->db->delete('user', array('id' => $id));
        return $query;
    }
    public function update_toko_by_id($id)
    {
        $query = $this->db->where('id', $id)->update('user', array('nama_toko' => ''));
        return $query;
    }
    public function update_profile_by_id($user)
    {
        $data = array(
            'nama' => htmlspecialchars($this->input->post('nama')),
            'nama_toko' => htmlspecialchars($this->input->post('nama_toko'))
        );

        $this->db->where('id', $user['id']);
        $query = $this->db->update('user', $data);
        return $query;
    }
    public function get_all_menu_by_id($user)
    {
        $query = $this->db->where('id_pemilik', $user['id'])->get('menu');
        return $query->result();
    }
    public function add_menu($user)
    {
        $data = array(
            'id_pemilik' => $user['id'],
            'nama' => htmlspecialchars($this->input->post('nama')),
            'harga' => htmlspecialchars($this->input->post('harga'))
        );

        $this->db->insert('menu', $data);
    }
    public function delete_menu_by_id($id)
    {
        $query = $this->db->delete('menu', array('id' => $id));
        return $query;
    }
}
