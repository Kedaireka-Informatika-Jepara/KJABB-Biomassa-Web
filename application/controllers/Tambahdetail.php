<?php
class Tambahdetail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('user/tambahdetail');
        $this->load->view('lib/header');
    }

    public function registration()
    {
        $this->form_validation->set_rules('keramba_id', 'ID Keramba', 'required|trim', [
            'required' => 'Keramba ID harus diisi'
        ]);
        $this->form_validation->set_rules('tanggal_feeding', 'Tanggal Pemberian Pakan', 'required|trim', [
            'required' => 'Tanggal harus diisi!'
        ]);
        $this->form_validation->set_rules('user_id', 'ID User', 'required|trim', [
            'required' => 'ID User harus diisi!'
        ]);
        

        if ($this->form_validation->run() == false) {
            $this->load->view('user/tambahdetail');
        } else {

            $data = [
                // 'activity_id' => htmlspecialchars($this->input->post('activity_id', true)),
                'tanggal_feeding' => htmlspecialchars($this->input->post('tanggal_feeding', true)),
                'keramba_id' => htmlspecialchars($this->input->post('keramba_id', true)),
                'user_id' => htmlspecialchars($this->input->post('user_id', true))
            ];

            $this->db->insert('feeding', $data);
            $this->db->get('pakan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success fade in">Anda berhasil melakukan perubahan!</div>');
            redirect('detailpakan');
            
            return true;
        }
    }
}
