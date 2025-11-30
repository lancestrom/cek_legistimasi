<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{
    public function punya()
    {
        $sql = "SELECT cbt_user.firstname FROM cbt_user
WHERE cbt_user.lastname LIKE '%XI DKV%' AND cbt_user.suspended='0'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    public function belum_punya()
    {
        $sql = "SELECT cbt_user.firstname FROM cbt_user
WHERE cbt_user.lastname LIKE '%XI DKV%' AND cbt_user.suspended='1'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
