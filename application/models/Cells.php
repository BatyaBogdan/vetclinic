<?php
class Cells extends CI_Model{
    public function select_cells(){
        $sql = "SELECT * from cells";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
}
?>