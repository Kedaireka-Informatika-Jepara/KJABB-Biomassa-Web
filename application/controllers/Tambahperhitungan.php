<?php
class Tambahperhitungan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('user/tambahperhitungan');
        $this->load->view('lib/header');
    }

    public function registration()
    {
        $this->form_validation->set_rules('id', 'Biota ID', 'required|trim', [
            'required' => 'Biota ID harus diisi',
        ]);
        $this->form_validation->set_rules('hidup', 'Jumlah Hidup', 'required|trim|decimal', [
            'required' => 'Jumlah ikan hidup harus diisi',
            'integer' => 'Masukan harus angka'
        ]);
        $this->form_validation->set_rules('mati', 'Jumlah Mati', 'required|trim|decimal', [
            'required' => 'Jumlah ikan mati harus diisi',
            'integer' => 'Masukan harus angka'
        ]);
        $this->form_validation->set_rules('tggl-hitung', 'Tanggal Hitung', 'required|trim', [
            'required' => 'Tanggal hitung harus diisi'
        ]);
        $this->form_validation->set_rules('use_id', 'User_id', 'required|trim', [
            'required' => 'User ID harus diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('user/tambahperhitungan');
        } else {

            $data = [
                'biota_id' => htmlspecialchars($this->input->post('id', true)),
                'hidup' => htmlspecialchars($this->input->post('hidup', true)),
                'mati' => htmlspecialchars($this->input->post('mati', true)),
                'tanggal_hitung' => htmlspecialchars($this->input->post('tggl-hitung', true)),
                'user_id' => htmlspecialchars($this->input->post('use_id', true))
            ];

            // if (!$this->db->insert('pengukuran', $data)) {
            //     $msg = $this->db->error();
            //     throw new Exception($msg['message'], $msg['code']);
            // } else {
            //     return $this->db->affected_rows();
            // }          
            $this->db->insert('perhitungan', $data);      
            $this->db->get('biota', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade in">Anda berhasil melakukan perubahan!</div>');
            redirect('perhitunganikan');
            return true;
        }
    }
}
