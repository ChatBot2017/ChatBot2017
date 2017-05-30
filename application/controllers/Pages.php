<?php
class Pages extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/nav');
        $this->load->view('templates/message');
        $this->load->view('pages/index');
    }
}
