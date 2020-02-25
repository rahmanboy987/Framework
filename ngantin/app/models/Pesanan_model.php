<?php

class Pesanan_model
{
    private $table = 'pesanan';
    private $table2 = 'menu';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPesanan()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' LEFT JOIN ' . $this->table2 . ' ON id_menu=menu.id');
        return $this->db->resultSet();
    }

    public function getPesananById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_pesanan=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function hapusPesanan($id)
    {
        $query = "DELETE FROM pesanan WHERE id_pesanan=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
