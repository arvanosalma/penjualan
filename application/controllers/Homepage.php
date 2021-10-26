<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter
    }

    function index()
    {
        $data['judul']="Toko Penjualan";
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
?>