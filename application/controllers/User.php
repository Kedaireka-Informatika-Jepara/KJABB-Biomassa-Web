<?php 
class User extends CI_Controller
{
    public function index()
    {
        $this->load->view('user/dashboard_user');
        $this->load->view('lib/header');
    }
}