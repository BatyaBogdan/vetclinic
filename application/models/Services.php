<?php
class Services extends CI_Model{
    public function select_services(){
        $sql = "SELECT * from services";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function select_dogtraining(){
        $sql = "SELECT * from dogtraining";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    
    public function select_zooproducts(){
        $sql = "SELECT * from zooproducts";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function select_zoosalon(){
        $sql = "SELECT * from zoosalon";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>