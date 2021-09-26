<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller{

    public function __construct()
    {
        parent::__construct;
        //Codeigniter
    }

    function index()
    {
        $data['judul']="Toko Penjualan";
        $this->load->view('templates/header',$data);
        $this->load->view('barang/index');
        $this->load->view('templates/footer');
    }


}