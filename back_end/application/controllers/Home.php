<?php
defined('BASEPATH') or exit('Ação não permitida!');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data = array(
            'titulo' => 'Home'
        );
        $this->load->view('layout/header', $data);
        $this->load->view('home/index');
        $this->load->view('layout/footer', $data);
    }
}
