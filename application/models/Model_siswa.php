<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{

    public function dataKelasSiswa()
    {
        $sql = "SELECT cbt_cohort.id,cbt_user.id AS id_siswa,a_jurusan.jurusan,cbt_cohort.name,COUNT(cbt_cohort_members.userid) AS jumlah_siswa
FROM cbt_user
INNER JOIN cbt_cohort_members
ON cbt_user.id=cbt_cohort_members.userid
INNER JOIN cbt_cohort
ON cbt_cohort_members.cohortid=cbt_cohort.id
INNER JOIN a_kelas
ON a_kelas.kelas=cbt_cohort.name
INNER JOIN a_jurusan
ON a_kelas.kode=a_jurusan.kode
WHERE cbt_user.suspended=0 AND cbt_cohort.name NOT IN ('admin')
GROUP BY cbt_cohort.name;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaDKVheader($id)
    {
        $sql = "SELECT id,name FROM `cbt_cohort` WHERE id='$id';";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    public function dataSiswadetailAktif($id)
    {
        $sql = "SELECT cbt_cohort.id,cbt_user.id AS id_siswa,cbt_user.firstname,a_jurusan.jurusan,cbt_cohort.name
FROM cbt_user
INNER JOIN cbt_cohort_members
ON cbt_user.id=cbt_cohort_members.userid
INNER JOIN cbt_cohort
ON cbt_cohort_members.cohortid=cbt_cohort.id
INNER JOIN a_kelas
ON a_kelas.kelas=cbt_cohort.name
INNER JOIN a_jurusan
ON a_kelas.kode=a_jurusan.kode
WHERE cbt_cohort.id='$id' AND cbt_user.suspended=0;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function dataSiswaDetailNonAktif($id)
    {
        $sql = "SELECT cbt_cohort.id,cbt_user.id AS id_siswa,cbt_user.firstname,a_jurusan.jurusan,cbt_cohort.name
FROM cbt_user
INNER JOIN cbt_cohort_members
ON cbt_user.id=cbt_cohort_members.userid
INNER JOIN cbt_cohort
ON cbt_cohort_members.cohortid=cbt_cohort.id
INNER JOIN a_kelas
ON a_kelas.kelas=cbt_cohort.name
INNER JOIN a_jurusan
ON a_kelas.kode=a_jurusan.kode
WHERE cbt_cohort.id='$id' AND cbt_user.suspended=1;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
