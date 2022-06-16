<?php

class M_inventory extends CI_Model
{

    public function insert_inventory($nama_inventory, $merk, $satuan, $jumlah, $kondisi_barang)
    {
        $this->db->trans_start();

       $this->db->query("INSERT INTO inventory(nama_inventory, merk, satuan, jumlah, kondisi_barang) VALUES ('$nama_inventory','$merk','$satuan','$jumlah','$kondisi_barang')");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_inventory($nama_inventory, $merk, $satuan, $jumlah, $kondisi_barang, $id_inventory)
    {
        $this->db->trans_start();

       $this->db->query("UPDATE inventory SET nama_inventory='$nama_inventory', merk='$merk', satuan='$satuan', jumlah='$jumlah', kondisi_barang='$kondisi_barang' WHERE id_inventory='$id_inventory'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function delete_inventory($id_inventory)
    {
        $this->db->trans_start();

       $this->db->query("DELETE FROM inventory WHERE id_inventory='$id_inventory'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }
    
    public function read_all_inventory()
    {
        
        $hasil=$this->db->query("SELECT * FROM inventory");
        return $hasil;
        
    }
}
