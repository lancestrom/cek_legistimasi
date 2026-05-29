<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    public function punya()
    {
        $sql = "SELECT a_siswa.nama_siswa,a_kelas.kelas,IF(a_siswa.status=0,'BLOKIR',NULL) AS status FROM `a_siswa`
INNER JOIN a_kelas
ON a_siswa.kelas=a_kelas.slug
WHERE a_siswa.kelas LIKE '%XI DKV%' AND a_siswa.status=1;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function belum_punya()
    {
        $sql = "SELECT a_siswa.nama_siswa,a_kelas.kelas,IF(a_siswa.status=0,'BLOKIR',NULL) AS status FROM `a_siswa`
INNER JOIN a_kelas
ON a_siswa.kelas=a_kelas.slug
WHERE a_siswa.kelas LIKE '%XI DKV%' AND a_siswa.status=0;";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
