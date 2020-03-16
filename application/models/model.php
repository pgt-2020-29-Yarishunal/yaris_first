<?php
class Model extends CI_Model {
    function insert($data){
        $this->db->insert("penjumlahan",$data);
    }
    function ambil(){
        $query = $this->db->get("penjumlahan");
        return $query;
    }
}
?>