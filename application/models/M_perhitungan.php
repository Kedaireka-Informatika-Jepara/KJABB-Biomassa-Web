<?php

class M_perhitungan extends CI_Model
{
    function tampil_data()
    {

        // return $this->db->get('pengukuran');

        $this->db->select('*');
        $this->db->from('perhitungan');
        $this->db->join('biota', 'perhitungan.biota_id = biota.biota_id');
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

    public function get_rate()
    {
        // $sql = 
        $this->db->select('(jumlah_hidup/(jumlah_hidup+jumlah_mati))*100');
        $this->db->as('survival_rate');
        $this->db->from('perhitungan');
        // $sql = "SELECT biota_id, tanggal_panen, panjang, bobot,
        //         jumlah_hidup, jumlah_mati, keramba_id,
        //         (jumlah_hidup/(jumlah_hidup+jumlah_mati))*100 AS survival_rate FROM panen ORDER BY activity_id";
        return $query = $this->db->get();
        
    }
}
