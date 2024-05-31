<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {
        $isi['kelas'] = $this->Model_siswa->dataKelasSiswa();

        $this->load->view('templates/header');
        $this->load->view('tampilan_home', $isi);
        $this->load->view('templates/footer');
    }

    public function tampilan_detail($id)
    {
        $isi['siswa_jursan_aktif'] = $this->Model_siswa->dataSiswadetailAktif($id);
        $isi['siswa_jursan_nonaktif'] = $this->Model_siswa->dataSiswaDetailNonAktif($id);

        $this->load->view('templates/header');
        $this->load->view('tampilan_detail', $isi);
        $this->load->view('templates/footer');
    }
}
