<?php
class Tambahbiota extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('user/tambah_biota');
        $this->load->view('lib/header');
    }

    public function registration()
    {
        // $this->form_validation->set_rules('id', 'Biota ID', 'required|trim|integer', [
        //     'required' => 'ID Biota harus diisi',
        //     'integer' => 'Masukan harus angka'
        // ]);
        // $this->form_validation->set_rules('jenis', 'Jenis', 'required|trim', [
        //     'required' => 'Jenis biota harus diisi'
        // ]);
        // $this->form_validation->set_rules('bobot', 'Bobot', 'required|trim', [
        //     'required' => 'Bobot ikan harus diisi'
        // ]);
        // $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim|integer', [
        //     'required' => 'Jumlah ikan harus diisi'
        // ]);
        // $this->form_validation->set_rules('panjang', 'Panjang', 'required|trim', [
        //     'required' => 'Panjang ikan harus diisi',
        //     'integer' => 'Masukan harus angka'
        // ]);
        // $this->form_validation->set_rules('tggl-tbr', 'Tggl-tbr', 'required|trim', [
        //     'required' => 'Tanggal tebar harus diisi'
        // ]);
        // $this->form_validation->set_rules('asl-keramba', 'Asl-keramba', 'required|trim|integer', [
        //     'required' => 'Asal keramba harus diisi',
        //     'integer' => 'Masukan harus angka'
        // ]);

        // if ($this->form_validation->run() == false) {
        //     $this->load->view('user/tambah_biota');
        // } else {

            $data = [
                'biota_id' => htmlspecialchars($this->input->post('id', true)),
                'jenis_biota' => htmlspecialchars($this->input->post('jenis', true)),
                'bobot' => htmlspecialchars($this->input->post('bobot', true)),
                'jumlah_bibit' => htmlspecialchars($this->input->post('jumlah', true)),
                'panjang' => htmlspecialchars($this->input->post('panjang', true)),
                'tanggal_tebar' => htmlspecialchars($this->input->post('tggl-tbr', true)),
                'tanggal_panen' => htmlspecialchars($this->input->post('tggl-panen', true)),
                'keramba_id' => htmlspecialchars($this->input->post('asl-keramba', true))
            ];

            $this->db->insert('biota', $data);
            $this->db->get('keramba');
            $this->session->set_flashdata('message', '<div class="alert alert-success fade in">Anda berhasil melakukan perubahan!</div>');
            redirect('biota');
            return true;
        }
}
