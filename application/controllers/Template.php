<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MModel');

    
  }

  function index()
  {
    $this->load->view("template/template");
  }

  function about()
  {
    $this->load->view("template/about");
  }

  function produk()
  {
    $this->load->view("template/produk");
  }

  function info()
  {
    $this->load->view("template/info");
  }

  function Tim()
  {
    $this->load->view("template/tim");
  }

  function Csr()
  {
    $this->load->view("template/info");
  }

  function Portopolio()
  {
    $this->load->view("template/portopolio");
  }

  function Servis()
  {
    $this->load->view("template/servis");
  }

  function Kontak()
  {
    $this->load->view("template/kontak"); 
  }

  function detInfo($id)
  {
    $data=$this->MModel->get("select * from info where id_info='$id'");
    if($data){
      $hasil['detail']=$data;
      $this->load->view("template/detInfo",$hasil);
    }
  }

  function detProduk()
  {
    $this->load->view("template/detProduk");
  }


}
