<?php
class Feedback extends CI_Model{
    public function add_feedback($name, $phone, $message, $date_feedback){
        $sql = "INSERT INTO feedback (name, phone, message, date_feedback) VALUES (?, ?, ?, ?)";
        $result=$this->db->query($sql, array($name, $phone, $message, $date_feedback));
        return $result;
    }
}
?>