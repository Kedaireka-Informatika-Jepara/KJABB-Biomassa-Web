<?php

class M_biota extends CI_Model
{
    function tampil_data()
    {

        $this->db->select('*');
        $this->db->from('biota');
        $this->db->join('keramba', 'keramba.keramba_id = biota.keramba_id');
        $this->db->order_by('biota.tanggal_tebar asc');
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
