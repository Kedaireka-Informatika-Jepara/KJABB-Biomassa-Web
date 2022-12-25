<?php
class Tambahpengukuran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('user/tambah_pengukuran');
        $this->load->view('lib/header');
    }

    public function registration()
    {
        $this->form_validation->set_rules('panjang', 'Panjang', 'required|trim|decimal', [
            'required' => 'Panjang ikan harus diisi',
            'decimal' => 'Bilangan harus desimal',
            'integer' => 'Masukan harus angka'
        ]);
        $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim|decimal', [
            'required' => 'Bobot ikan harus diisi',
            'decimal' => 'Bilangan harus desimal'
        ]);
        $this->form_validation->set_rules('tggl-ukur', 'Tggl-ukur', 'required|trim', [
            'required' => 'Tanggal tebar harus diisi'
        ]);
        $this->form_validation->set_rules('bio-id', 'Bio-id', 'required|trim', [
            'required' => 'Biota ID harus diisi'
        ]);
        $this->form_validation->set_rules('use-id', 'Use-id', 'required|trim', [
            'required' => 'Biota ID harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('user/tambah_pengukuran');
        } else {

            $data = [
                'bobot' => htmlspecialchars($this->input->post('bobot', true)),
                'panjang' => htmlspecialchars($this->input->post('panjang', true)),
                'tanggal_ukur' => htmlspecialchars($this->input->post('tggl-ukur', true)),
                'biota_id' => htmlspecialchars($this->input->post('bio_id', true)),
                'user_id' => htmlspecialchars($this->input->post('use_id', true))
            ];

            if (!$this->db->insert('pengukuran', $data)) {
                $msg = $this->db->error();
                throw new Exception($msg['message'], $msg['code']);
            } else {
                return $this->db->affected_rows();
            }                
            $this->db->get('biota');
            $this->session->set_flashdata('message', '<div class="alert alert-info">Anda berhasil melakukan perubahan!</div>');
            redirect('pengukuranikan');
            return true;
        }
    }
}
