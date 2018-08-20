<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('MModel');

    if(!$this->session->userdata('username_sess'))
    {
      redirect(base_url().'__Login');
    }
  }

  function getDataVisitor()
  {
    $range=$this->input->get("days");
    $data=$this->MModel->getData("select tanggal as date , hits as value from visitor where tanggal >='$range' group by tanggal order by tanggal ASC");
    echo json_encode($data);
  }

  public function index()
  {
    //echo $this->input->ip_address();
    $this->load->view('v_dashboard');
  }

  public function ajax_list()
  {
        $table = 'siswa';
        $column_order = array("nama","tgl","waktu","status",null);
        $search = array("nama","tgl","waktu","status",null);
        $order = array("tgl" => "DESC");
        $join_ref="rfid";
        $join="rfid.id_rfid=siswa.id_rfid";
        $this->MModel->set_data("table",$table);
        $this->MModel->set_data("join_ref",$join_ref);
        $this->MModel->set_data("join",$join);
        $this->MModel->set_data("column_order",$column_order);
        $this->MModel->set_data("column_search",$search);
        $this->MModel->set_data("order",$order);
        $list = $this->MModel->get_datatables();
        $data = array();

        $no = $_POST['start'];
        foreach ($list as $l) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $l->nama;
            $row[] = $l->tgl;
            $row[] = $l->waktu;
            $row[] = $l->status;
            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->MModel->count_all(),
                        "recordsFiltered" => $this->MModel->count_filtered(),
                        "data" => $data,
                );
        //output to json format

        echo json_encode($output);

    }

    function data()
    {
      $date=date("Y");

      if($this->session->userdata("role_sess")==1)
      {
          $id=$this->session->userdata("id_siswa_sess");
          $data=$this->MModel->getData("select SUM(jumlah_air) as value ,tgl as label from log_air ab inner join user peng on peng.id_user=ab.id_user group by tgl");
      }
      else {
        $data=$this->MModel->getData("select SUM(jumlah_air) as value ,tgl as label from log_air ab inner join user peng on peng.id_user=ab.id_user group by tgl");
      }

      /*$hasil=array();
      foreach ($data as $d) {
        $status=$d['status'];
        $data2=$this->MModel->get("select count(id_user) as perstatus from absen  where status='$status'");
        $row['value']=$d['value'];
        $row['label']=$d['label'];
        $row['status']=$d['status'];
        $hasil=$row;
      }*/
      echo json_encode($data);
    }




}
