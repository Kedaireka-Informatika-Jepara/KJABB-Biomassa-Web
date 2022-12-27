<?php
class Perhitunganikan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_perhitungan');
		$this->load->helper('url');
        $this->load->view('lib/header');
        
    }

    public function index()
    {
        $data['perhitungan'] = $this->m_perhitungan->tampil_data()->result();
        $this->load->view('user/perhitunganikan', $data);
        $this->load->view('lib/footer');

        // $data['tampil'] = 
    }

    public function hapus($perhitungan_id)
    {
        $where = array('perhitungan_id' => $perhitungan_id);
        $this->m_perhitungan->hapus_data($where, 'perhitungan');
        redirect('perhitunganikan');
    }

    public function edit($perhitungan_id)
    {
        $where = array('perhitungan_id' => $perhitungan_id);
        $data['perhitungan'] = $this->m_perhitungan->edit_data($where, 'perhitungan')->result();
        $this->load->view('user/ubah_perhitungan', $data);
    }

    public function update()
    {
        $data = [
            'perhitungan_id' => htmlspecialchars($this->input->post('perhitungan_id', true)),
            'biota_id' => htmlspecialchars($this->input->post('id', true)),
            'hidup' => htmlspecialchars($this->input->post('hidup', true)),
            'mati' => htmlspecialchars($this->input->post('mati-bio', true)),
            'tanggal_hitung' => htmlspecialchars($this->input->post('tggl-hitung', true)),
            'survival_rate' => htmlspecialchars($this->db->insert('rate', true)),
            'user_id' => htmlspecialchars($this->db->insert('user', 'username'))
            ];

        $where = array(
            'perhitungan_id' => htmlspecialchars($this->input->post('id', true))
        );

        $this->m_perhitungan->update_data($where, $data, 'perhitungan');
        redirect('perhitunganikan');
    }

    public function rate()
    {
        $data['title'] = "rate";
        $this->load->model('m_perhitungan');

        $data['rate'] = $this->m_perhitq->get_rate()->result();
        $this->load->view('user/perhitunganikan', $data);
        
    }
}
