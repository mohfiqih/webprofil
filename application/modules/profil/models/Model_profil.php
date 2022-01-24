<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_profil extends CI_Model
{
    function getDataPesan()
    {
        $query = $this->db->get('tb_saran');
        return $query->result();
    }

    function insertDataPesan($data)
    {
        $this->db->insert('tb_saran', $data);
    }

    function getDataPesanDetail($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tb_saran');
        return $query->row();
    }
    function updateDataPesan($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tb_saran', $data);
    }

    function deleteDataPesan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tb_saran');
    }
}