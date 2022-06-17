<?php

class M_user extends CI_Model
{
    public function pendaftaran_user($id, $username, $email, $password, $id_user_level, $id_status_verifikasi)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO user(id_user,username,password,email,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','$id_user_level','$id')");
       $this->db->query("INSERT INTO user_detail(id_user_detail, id_status_verifikasi, tanggal_registered) VALUES ('$id', '$id_status_verifikasi', NOW())");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function cek_login($username)
    {
        
        $hasil=$this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE username='$username'");
        return $hasil;
        
    }

    public function read_all_anggota()
    {

        $hasil=$this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_user_level=3 AND nama_lengkap IS NOT NULL");
        return $hasil;

    }

    public function insert_user($id, $username, $password, $email, $id_user_level, 
    $nama_lengkap, $jabatan, $no_kk, $no_ktp, $jenis_kelamin, $agama, $no_hp, $alamat,
     $tempat_lahir, $tanggal_lahir, $foto_kk, $id_status_verifikasi)
    {
        $this->db->trans_start();

        $this->db->query("INSERT INTO user(id_user,username,password,email,id_user_level, id_user_detail) 
        VALUES ('$id','$username','$password','$email','$id_user_level','$id')");
        $this->db->query("INSERT INTO user_detail(id_user_detail, nama_lengkap, jabatan, no_kk, no_ktp, 
        jenis_kelamin, agama, no_hp, alamat,tempat_lahir, tanggal_lahir, foto_kk, id_status_verifikasi, tanggal_registered) 
        VALUES ('$id','$nama_lengkap','$jabatan','$no_kk','$no_ktp','$jenis_kelamin','$agama','$no_hp','$alamat','$tempat_lahir',
        '$tanggal_lahir','$foto_kk','$id_status_verifikasi', NOW())");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }
}