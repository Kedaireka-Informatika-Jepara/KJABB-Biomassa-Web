<?php

class M_detail extends CI_Model
{
    function tampil_data()
    {

        // return $this->db->get('pengukuran');

        // $this->db->select('*');
        // $this->db->from('feeding');
        // $this->db->join('keramba', 'feeding.keramba_id = keramba.keramba_id');
        // $query = $this->db->get();
        // return $query;

        $this->db->select('feeding.*, keramba.keramba_id, keramba.nama');
        $this->db->from('feeding');
        $this->db->join('keramba', 'feeding.keramba_id = keramba.keramba_id');
        $this->db->order_by('feeding.tanggal_feeding');
        $query = $this->db->get();
        return $query;

    }

    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}
