<?php

class M_berita extends CI_Model
{

    public function read_all_berita()
    {
        
        $hasil=$this->db->query("SELECT * FROM berita");
        return $hasil;
        
    }

    public function insert_berita($judul_berita, $isi_berita, $gambar_berita)
    {

        $this->db->trans_start();

       $this->db->query("INSERT INTO berita(judul_berita, isi_berita, gambar_berita, created_date) VALUES ('$judul_berita','$isi_berita','$gambar_berita',NOW())");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;

    }

}