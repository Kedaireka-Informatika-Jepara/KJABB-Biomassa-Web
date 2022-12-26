<?php
class Panen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_panen');
        $this->load->view('lib/header');
    }

    public function index()
    {
        // $this->load->view('user/panen');
        // $rate['survival_rate'] = $this->m_panen->survival_rate_fish();
        // $this->load->model('M_panen');
        // $this->load->view('user/panen', $rate);

        $data['panen'] = $this->m_panen->tampil_data()->result();
        $this->load->view('user/panen', $data);
        $this->load->view('lib/footer', $data);
    }

    public function rate()
    {
        $data['title'] = "pengukuran";
        $this->load->model('m_panen');

        $data['pengukuran'] = $this->m_panen->get_rate()->result();
        $this->load->view('user/panen', $data);
        
    }
}
