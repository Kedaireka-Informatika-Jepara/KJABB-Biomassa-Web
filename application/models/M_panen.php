<?php

class M_panen extends CI_Model
{
    public function __construct()
	{
		$this->load->database();
	}

    public function survival_rate_fish()
    {
        $sql = "SELECT jumlah_hidup, jumlah_mati, (jumlah_hidup/(jumlah_hidup+jumlah_mati)) as survival_rate FROM panen ORDER BY activity_id";
        return $this->db->query($sql);
    }

    function tampil_data()
    {

        $this->db->select('*');
        $this->db->from('panen');
        $this->db->join('biota', 'biota.biota_id = panen.biota_id');
        $this->db->join('keramba', 'keramba.keramba_id = panen.keramba_id');
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