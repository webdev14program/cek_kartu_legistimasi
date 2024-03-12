<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DKV extends CI_Controller
{


    public function index()
    {
        $isi['kelas'] = $this->Model_siswa->dataSiswaDKV();

        $this->load->view('templates/header');
        $this->load->view('DKV/tampilan_cekl_perkelas', $isi);
        $this->load->view('templates/footer');
        redirect('Home');
    }

    public function tampilan_detail($id)
    {
        $isi['header'] = $this->Model_siswa->dataSiswaDKVheader($id);
        $isi['aktif'] = $this->Model_siswa->dataSiswaDKVdetailAktif($id);
        $isi['non_aktif'] = $this->Model_siswa->dataSiswaDKVdetailNonAktif($id);

        $this->load->view('templates/header');
        $this->load->view('DKV/tampilan_cekl_perkelas_detail', $isi);
        $this->load->view('templates/footer');
        redirect('Home');
    }
}
