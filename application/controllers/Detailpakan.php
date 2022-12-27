<?php
class Detailpakan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_detail');
		$this->load->helper('url');
        $this->load->view('lib/header');
        
    }

    public function index()
    {
        $data['detail'] = $this->m_detail->tampil_data()->result();
        $this->load->view('user/detailpakan', $data);
        $this->load->view('lib/footer');

        // $data['tampil'] = 
    }

    public function hapus($activity_id)
    {
        $where = array('activity_id' => $activity_id);
        $this->m_detail->hapus_data($where, 'detail');
        redirect('detailpakan');
    }

    public function edit($activity_id)
    {
        $where = array('activity_id' => $activity_id);
        $data['detail'] = $this->m_detail->edit_data($where, 'detail')->result();
        $this->load->view('user/detailpakan', $data);
    }

    public function update()
    {
        $data = [
            'activity_id' => htmlspecialchars($this->input->post('activity_id', true)),
            'tanggal_feeding' => htmlspecialchars($this->input->post('tggl_feed', true)),
            'keramba_id' => htmlspecialchars($this->db->insert('keramba_id', true)),
            'user_id' => htmlspecialchars($this->db->insert('user', 'username'))
            ];

        $where = array(
            'activity_id' => htmlspecialchars($this->input->post('activity_id', true))
        );

        $this->m_detail->update_data($where, $data, 'detail');
        redirect('detailpakan');
    }

}
