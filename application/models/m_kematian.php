<?php

class M_kematian extends CI_Model
{

    public function insert_kematian($tanggal_kematian, $jam_kematian, $usia, $id_user)
    {
        $this->db->trans_start();

       $this->db->query("INSERT INTO kematian(tanggal_kematian, jam_kematian, usia, id_user) VALUES ('$tanggal_kematian','$jam_kematian', '$usia', '$id_user')");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

}