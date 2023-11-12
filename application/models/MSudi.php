<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MSudi extends CI_Model
{
    function AddData($tabel, $data=array())
    {
        $this->db->insert($tabel,$data);
    }

    function UpdateData($tabel,$fieldid,$fieldvalue,$data=array())
    {
        $this->db->where($fieldid,$fieldvalue)->update($tabel,$data);
    }

    function DeleteData($tabel,$fieldid,$fieldvalue)
    {
        $this->db->where($fieldid,$fieldvalue)->delete($tabel);
    }

    function GetData($tabel)
    {
        $query= $this->db->get($tabel);
        return $query->result();
    }

    function GetDataWhere($tabel,$id,$nilai)
    {
        $this->db->where($id,$nilai);
        $query= $this->db->get($tabel);
        return $query;
    }

    function GetCariBuku($cari)
    {
        $query = $this->db->query("SELECT * From buku where nama_buku like '%$cari%' ");
        return $query;
	}

    function GetCariPenerbit($cari)
    {
        $query = $this->db->query("SELECT * From penerbiit where nama like '%$cari%' ");
        return $query;
	}

    public function get_pengadaan() {
        $this->db->select('nama_buku, penerbit, stok');
        $this->db->from('buku');
        $this->db->order_by('stok', 'ASC'); // Sorting by stock in ascending order (lowest stock first)
        $this->db->limit(10); // Retrieve the top 10 books with the lowest stock
        $query = $this->db->get();
    
        return $query->result();
    }
    
}