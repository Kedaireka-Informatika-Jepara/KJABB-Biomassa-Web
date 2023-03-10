<?php

class M_pengukuran extends CI_Model
{
    function tampil_data()
    {

        // return $this->db->get('pengukuran');

        $this->db->select('pengukuran.*, biota.biota_id, biota.jenis_biota');
        $this->db->from('pengukuran');
        $this->db->join('biota', 'pengukuran.biota_id = biota.biota_id');
        $this->db->order_by('pengukuran.tanggal_ukur asc');
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
