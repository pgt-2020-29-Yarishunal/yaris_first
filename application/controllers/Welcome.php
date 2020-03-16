<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {
    public function index()
	{
        $this->load->model("model");
        $data['ambil'] = $this->model->ambil();
        $this->load->view("dosen_tabel",$data);
	}
    public function inserted_dosen(){
        $this->load->view("dosen");
    }
    public function validasi_dosen()
	{
       $this->load->view("dosen");
	}
public function validasi_dosen1()
	{
      $this->load->model("model");
        $data = array(
        "angka_pertama" =>$this->input->post("angka1"),
        "angka_kedua" =>$this->input->post("angka2"),
        "hasil" =>$this->input->post("hasil"),
        "teks" =>$this->input->post("ket"),
        );
        $this->model->insert($data);
        redirect(base_url()."index.php/welcome/inserted_dosen");
	}

}
