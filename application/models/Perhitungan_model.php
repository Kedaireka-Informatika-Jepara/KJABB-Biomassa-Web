<?php 

class Perhitungan_model extends CI_Model 
{
    public function getPerhitungan($biota_id)
    {
        return $this->db->order_by('tanggal_hitung', 'DESC')->get_where('perhitungan', ['biota_id' => $biota_id], 10)->result_array();

        if ($biota_id === null) {
            return $this->db->get_where('perhitungan', ['biota_id' => $biota_id])->result_array();
        } else {
            return $this->db->get_where('biota', ['biota_id' => $biota_id])->result_array();
        }
    }


    public function createPerhitungan($data)
    {
        if (!$this->db->insert('perhitungan', $data)) {
            $msg = $this->db->error();
            throw new Exception($msg['message'], $msg['code']);
        } else {
            return $this->db->affected_rows();
        }
    }

    public function updatePerhitungan($perhitungan_id, $data)
    {
        if (!$this->db->update('perhitungan', $data, ['perhitungan_id' => $perhitungan_id])) {
            $msg = $this->db->error();
            throw new Exception($msg['message'], $msg['code']);
        } else {
            return $this->db->affected_rows();
        }
    }

    public function deletePerhitungan($perhitungan_id)
    {
        $this->db->delete('perhitungan', ['perhitungan_id' => $perhitungan_id]);

        return $this->db->affected_rows();
    }
}
?>