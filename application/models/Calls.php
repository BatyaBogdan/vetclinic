<?php
class Calls extends CI_Model{
    public function add_call($name, $phone, $date_call){
        $sql = "INSERT INTO calls (name, phone, date_call) VALUES (?, ?, ?)";
        $result=$this->db->query($sql, array($name, $phone, $date_call));
        return $result;
    }
}
?>