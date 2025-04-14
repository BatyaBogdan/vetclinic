<?php
class Complaints extends CI_Model{
    public function select_complaints(){
        $sql = "SELECT * from complaints";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function check_complaints($id_user){
        $sql = "SELECT * from complaints where id_user = ?";
        $result=$this->db->query($sql, array($id_user));
        return $result->result_array();
    }
    public function add_complaint($id_user, $date_complaint, $fio, $phone, $email, $fio_doctor, $details){
        $sql = "INSERT INTO complaints (id_user, date_complaint, fio, phone, email, fio_doctor, details) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $result = $this->db->query($sql, array($id_user, $date_complaint, $fio, $phone, $email, $fio_doctor, $details));
        return $result;
    }
    public function update_complaint($answer, $id_answer){
        $sql = "UPDATE complaints set answer = ?, status = 'Отвечен' where id_answer = ?";
        $result = $this->db->query($sql, array($answer, $id_answer));
        return $result;
    }
}
?>