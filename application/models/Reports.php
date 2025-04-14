<?php
class Reports extends CI_Model{
    public function report_services(){
        $sql = "SELECT orders.date, COUNT(*), COUNT(a.id_order), COUNT(b.id_order), SUM(orders.price) FROM orders LEFT JOIN (SELECT id_order FROM orders WHERE category = 'Дополнительные услуги') a ON orders.id_order = a.id_order LEFT JOIN (SELECT id_order FROM orders WHERE id_service = 19) b ON orders.id_order = b.id_order GROUP BY orders.date;";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function all_report_services(){
        $sql = "SELECT COUNT(*), COUNT(a.id_order), COUNT(b.id_order), SUM(orders.price) FROM orders LEFT JOIN (SELECT id_order FROM orders WHERE category = 'Дополнительные услуги') a ON orders.id_order = a.id_order LEFT JOIN (SELECT id_order FROM orders WHERE id_service = 19) b ON orders.id_order = b.id_order";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function report_personal(){
        $sql = "SELECT orders.fio_doctor, a.spec, COUNT(orders.id_order), (SELECT COUNT(*) FROM complaints b WHERE b.fio_doctor = orders.fio_doctor), SUM(orders.price) FROM orders LEFT JOIN users a ON orders.fio_doctor = a.fio AND a.role = 'Врач' WHERE orders.fio_doctor IS NOT NULL GROUP BY orders.fio_doctor, a.spec";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
    public function all_report_personal(){
        $sql = "SELECT COUNT(id_order), (SELECT COUNT(*) FROM complaints WHERE fio_doctor IN (SELECT DISTINCT fio_doctor FROM orders WHERE fio_doctor IS NOT NULL)), SUM(price) FROM orders WHERE fio_doctor IS NOT NULL";
        $result = $this->db->query($sql);
        return $result->result_array();
    }
}
?>