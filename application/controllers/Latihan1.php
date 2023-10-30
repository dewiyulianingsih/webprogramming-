<?php
class Latihan1 extends CI_Controller
{
 public function index()
    {
        echo "Selamat Datang...... Selamat Belajar Web Programming";
        $kategori = $this->ModelBuku->getkategori();
        foreach ($kategori->result() as $kat) {
            echo $kat->id_kategori .'-'. $kat->nama_kategori . "<br>"
        }
        //$this->load->view('view-latihan');
    }
 public function penjumlahan($n1, $n2)
    {
        #ver_dump($n1);/ echo digunakan untuk mengetahui nilai yang terdapat pada URL 
        #die; untuk memberhentikan perintah 
        #load membaca/memanggil sebuah mode dengan nama model_latihan1
        #$hasil adalah variabel yang akan kita panggil 

    // $this->load->model('Model_latihan1');
    // $hasil = $this->Model_latihan1->jumlah($n1, $n2);
    // echo"Hasil Penjumlahan dari ". $n1 ." + ". $n2 ." = ".$hasil;
    // }

    // public function perkalian($n1, $n2)
    // {
    // $this->load->model('Model_latihan1');
    // $hasil = $this->Model_latihan1->kali($n1, $n2);
    // echo"Hasil Perkalian dari ". $n1 ." x ". $n2 ." = ".$hasil;
    // }

//    public function pengurangan($n1, $n2)
//    {
//   $this->load->model('Model_latihan1');
//   $hasil = $this->Model_latihan1->kurang($n1, $n2);
//    echo"Hasil Pengurangan dari ". $n1 ." - ". $n2 ." = ".$hasil;

    $this->load->model('Model_latihan1');

    $data['nilai1'] = $n1;
    $data['nilai2'] = $n2;
    $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

    $this->load->view('view-latihan', $data);
    }

}




