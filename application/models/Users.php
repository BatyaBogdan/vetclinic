<?php
class Users extends CI_Model{
    public function insert_user($fio, $phone, $email, $photo, $login, $password){
        $sql = "INSERT INTO users (fio, phone, email, photo, login, password) VALUES (?, ?, ?, ?, ?, ?)";
        $result=$this->db->query($sql, array($fio, $phone, $email, $photo, $login, $password));
        return $result;
    }
    public function select_user($login, $password){
        $sql = "SELECT * from users where login = ? and password = ?";
        $result=$this->db->query($sql, array($login, $password));
        return $result->row_array();
    }
    public function select_doctor(){
        $sql = "SELECT * from users where role = 'Врач'";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
}
?>