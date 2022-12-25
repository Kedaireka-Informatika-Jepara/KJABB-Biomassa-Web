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
        // $data['survival_rate'] = $this->m_panen->survival_rate_fish();
        // $this->load->model('M_panen');
        // $this->load->view('user/panen', $data);

        $data['panen'] = $this->m_panen->tampil_data()->result();
        $this->load->view('user/panen', $data);
        $this->load->view('lib/footer', $data);
    }

    public function rate()
    {
        
    }
}
