<?php

class M_panen extends CI_Model
{
    public function __construct()
	{
		$this->load->database();
	}

    // public function get_rate()
    // {
    //     // $sql = 
    //     $this->db->select('(jumlah_hidup/(jumlah_hidup+jumlah_mati))*100');
    //     $this->db->as('survival_rate');
    //     $this->db->from('panen');
    //     // $sql = "SELECT biota_id, tanggal_panen, panjang, bobot,
    //     //         jumlah_hidup, jumlah_mati, keramba_id,
    //     //         (jumlah_hidup/(jumlah_hidup+jumlah_mati))*100 AS survival_rate FROM panen ORDER BY activity_id";
    //     return $query = $this->db->get();
        
    // }

    function tampil_data()
    {
        // $sql = "SELECT (jumlah_hidup/(jumlah_hidup+jumlah_mati)) as survival_rate FROM panen ORDER BY activity_id";
        // return $this->db->query($sql);
        $this->db->select('*');
        $this->db->from('panen');
        $this->db->join('biota', 'biota.biota_id = panen.biota_id');
        $this->db->join('keramba', 'keramba.keramba_id = panen.keramba_id');
        $this->db->order_by('panen.tanggal_panen asc');
        
        return $query = $this->db->get();
        
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
    public function graph()
    {
        $data = $this->db->query("SELECT * FROM panen");
    }
}