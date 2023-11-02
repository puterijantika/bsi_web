<?php
defined('BASEPATH') or exit('No direct script access allowed');

class belajar extends CI_Controller
{
    public function index()
    {
        $nilai1=4;
        $nilai=6;

        $tambah = $nilai1 + $nilai2;

        echo "OPERATOR <br>";
        echo "hasil dari $nilai1 + $nilai2 =", $tambah;
    }
    public function biodataa()
    {
    
        $nim = 19221063 ;
        $nama = "Puteri Jantika" ;
        $kelas = "19.3A.04" ;
        $prodi = "Sistem Informasi" ;
        echo "NIM = $nim <br>" ;
        echo "Nama = $nama <br>" ;
        echo "Kelas = $kelas <br>" ;
        echo "Prodi = $prodi <br>" ;
    
    }
    public function biodata()
    {
        $data = array(
            'No_Barang' => "22556314",
            'Nama_Barang' => "penghapus",
            'qty' => 90
        );
        
        $this->load->view('view_belajar', $data);

    }
    


}
