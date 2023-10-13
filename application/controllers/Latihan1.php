<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang...selamat belajar web programming";
        //$this->load->view('view-Latihan1');
    }

    public function penjumlahan($n1,$n2)
    {
        $this->load->model('model_latihan1');
        $hasil = $this->model_latihan1->jumlah($n1, $n2);
        echo"hasil penjumlahan dari". $n1."+".$n2."="
.$hasil;
    }
}