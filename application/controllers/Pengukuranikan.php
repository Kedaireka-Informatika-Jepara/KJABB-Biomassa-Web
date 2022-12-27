<?php
class Pengukuranikan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengukuran');
		$this->load->helper('url');
        $this->load->view('lib/header');
        
    }

    public function index()
    {
        $data['pengukuran'] = $this->m_pengukuran->tampil_data()->result();
        $this->load->view('user/pengukuranikan', $data);
        $this->load->view('lib/footer');

        // $data['tampil'] = 
    }

    public function hapus($pengukuran_id)
    {
        $where = array('pengukuran_id' => $pengukuran_id);
        $this->m_pengukuran->hapus_data($where, 'pengukuran');
        redirect('pengukuranikan');
    }

    public function edit($pengukuran_id)
    {
        $where = array('pengukuran_id' => $pengukuran_id);
        $data['pengukuran'] = $this->m_pengukuran->edit_data($where, 'pengukuran')->result();
        $this->load->view('user/ubah_pengukuran', $data);
    }

    public function update()
    {
        $data = [
            'biota_id' => htmlspecialchars($this->input->post('biota_id', true)),
            'jenis_biota' => htmlspecialchars($this->input->post('jenis-bio', true)),
            'panjang' => htmlspecialchars($this->input->post('panjang', true)),
            'bobot' => htmlspecialchars($this->input->post('bobot', true)),
            'tanggal_ukur' => htmlspecialchars($this->input->post('tggl-ukur', true)),
            'user_id' => htmlspecialchars($this->db->insert('user', 'username'))
            ];

        $where = array(
            'pengukuran_id' => htmlspecialchars($this->input->post('bio-id', true))
        );

        $this->m_pengukuran->update_data($where, $data, 'pengukuran');
        redirect('pengukuranikan');
    }
}
