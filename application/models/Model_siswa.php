<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{

    public function dataSiswaDKV()
    {
        $sql = "SELECT cbt_cohort.id,a_jurusan.jurusan,cbt_cohort.name,COUNT(*) jumlah_siswa FROM cbt_user
INNER JOIN cbt_cohort_members
ON cbt_user.id=cbt_cohort_members.userid
INNER JOIN cbt_cohort
ON cbt_cohort_members.cohortid=cbt_cohort.id
INNER JOIN a_kelas
ON cbt_cohort.name=a_kelas.kelas
INNER JOIN a_jurusan
ON a_kelas.kode=a_jurusan.kode
WHERE cbt_cohort.name like '%DKV%'
group BY cbt_cohort.id;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaDKVheader($id)
    {
        $sql = "SELECT id,name FROM `cbt_cohort` WHERE id='$id';";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function dataSiswaDKVdetailAktif($id)
    {
        $sql = "SELECT cbt_cohort.id,cbt_user.id,cbt_user.firstname,cbt_cohort.name,IF(cbt_user.suspended=0,'AKTIF','TIDAK AKTIF') AS keterangan FROM cbt_user
INNER JOIN cbt_cohort_members
ON cbt_user.id=cbt_cohort_members.userid
INNER JOIN cbt_cohort
ON cbt_cohort_members.cohortid=cbt_cohort.id
WHERE cbt_cohort.id='$id' AND cbt_user.suspended=0;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaDKVdetailNonAktif($id)
    {
        $sql = "SELECT cbt_cohort.id,cbt_user.id,cbt_user.firstname,cbt_cohort.name,IF(cbt_user.suspended=0,'AKTIF','TIDAK AKTIF') AS keterangan FROM cbt_user
INNER JOIN cbt_cohort_members
ON cbt_user.id=cbt_cohort_members.userid
INNER JOIN cbt_cohort
ON cbt_cohort_members.cohortid=cbt_cohort.id
WHERE cbt_cohort.id='$id' AND cbt_user.suspended=1;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
