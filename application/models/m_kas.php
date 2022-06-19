<?php

class M_kas extends CI_Model
{

    public function insert_kas($jenis_kas, $nominal, $keterangan_kas)
    {
        $this->db->trans_start();

       $this->db->query("INSERT INTO kas(jenis_kas, nominal, keterangan_kas, tanggal_transaksi) VALUES ('$jenis_kas','$nominal', '$keterangan_kas', NOW())");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    
    public function read_all_kas()
    {
        $hasil=$this->db->query("SELECT * FROM kas");
        return $hasil;
    }

    public function read_all_kas_kredit()
    {
        $hasil=$this->db->query("SELECT SUM(nominal) as nominal FROM kas WHERE jenis_kas='Kredit'");
        return $hasil;
    }

    public function read_all_kas_debit()
    {
        $hasil=$this->db->query("SELECT SUM(nominal) as nominal FROM kas WHERE jenis_kas='Debit'");
        return $hasil;
    }

}