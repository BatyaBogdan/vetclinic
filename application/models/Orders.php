<?php
class Orders extends CI_Model{
    public function select_orders() {
        $sql = "select orders.id_order, orders.date, orders.fio, orders.breed, services.type_service, orders.diagnosis, orders.result, orders.status_pay, orders.status from orders JOIN services ON orders.id_service = services.id_service";
        $result=$this->db->query($sql);
        return $result->result_array();
    }
    public function add_order_salon($date, $id_user, $fio, $type_animal, $breed, $nickname, $id_salon, $salon_date, $salon_time, $price){
        $sql = "INSERT INTO orders (date, id_user, fio, category, type_animal, breed, nickname, name_service, id_salon, salon_date, salon_time, price) VALUES (?, ?, ?, 'Дополнительные услуги', ?, ?, ?, 'Зоосалон', ?, ?, ?, ?)";
        $result = $this->db->query($sql, array($date, $id_user, $fio, $type_animal, $breed, $nickname, $id_salon, $salon_date, $salon_time, $price));
        return $result;
    }
    public function add_order_training($date, $id_user, $fio, $phone, $type_animal, $breed, $nickname, $id_training, $address, $date_training, $time_training, $price){
        $sql = "INSERT INTO orders (date, id_user, fio, category, phone, type_animal, breed, nickname, name_service, id_training, address, date_training, time_training, price) VALUES (?, ?, ?, 'Дополнительные услуги', ?, ?, ?, ?, 'Дрессировки для собак', ?, ?, ?, ?, ?)";
        $result = $this->db->query($sql, array($date, $id_user, $fio, $phone, $type_animal, $breed, $nickname, $id_training, $address, $date_training, $time_training, $price));
        return $result;
    }
    public function add_order_hostel($date, $id_user, $fio, $type_animal, $breed, $nickname, $id_cell, $size_animal, $age, $date_from, $date_by, $note){
        $sql = "INSERT INTO orders (date, id_user, fio, category, type_animal, breed, nickname, id_cell, name_service, size_animal, age, date_from, date_by, status_pay, note) VALUES (?, ?, ?, 'Дополнительные услуги', ?, ?, ?, ?, 'Зоогостиница', ?, ?, ?, ?, 'Не оплачено', ?)";
        $result = $this->db->query($sql, array($date, $id_user, $fio, $type_animal, $breed, $nickname, $id_cell, $size_animal, $age, $date_from, $date_by, $note));
        return $result;
    }
    public function add_order_product($date, $id_user, $fio, $id_product, $col, $address_delivery, $price){
        $sql = "INSERT INTO orders (date, id_user, fio, category, name_service, id_product, col, address_delivery, price) VALUES (?, ?, ?, 'Дополнительные услуги', 'Зоопродукты', ?, ?, ?, ?)";
        $result = $this->db->query($sql, array($date, $id_user, $fio, $id_product, $col, $address_delivery, $price));
        return $result;
    }
    public function add_order_service($date, $id_user, $fio, $type_animal, $breed, $nickname, $id_service, $price){
        $sql = "INSERT INTO orders (date, id_user, fio, category, type_animal, breed, nickname, id_service, price, status_pay) VALUES (?, ?, ?, 'Ветеринарные услуги', ?, ?, ?, ?, ?, 'Не оплачено')";
        $result = $this->db->query($sql, array($date, $id_user, $fio, $type_animal, $breed, $nickname, $id_service, $price));
        return $result;
    }
    public function add_order_appeal($date, $id_user, $fio, $type_animal, $breed, $nickname, $complaint){
        $sql = "INSERT INTO orders (date, id_user, fio, category, type_animal, breed, nickname, complaint, status_pay) VALUES (?, ?, ?, 'Обращение к врачу', ?, ?, ?, ?, NULL)";
        $result = $this->db->query($sql, array($date, $id_user, $fio, $type_animal, $breed, $nickname, $complaint));
        return $result;
    }
    public function pay_service($id_order){
        $sql = "UPDATE orders set status_pay = 'Оплачено' where id_order = ?";
        $result = $this->db->query($sql, array($id_order));
        return $result;
    }
    public function cancel_service($id_order){
        $sql = "UPDATE orders set status = 'Заявка отменена' where id_order = ?";
        $result = $this->db->query($sql, array($id_order));
        return $result;
    }
    public function user_orders($id_user) {
        $sql = "select orders.id_order, orders.date, orders.breed, services.type_service, orders.fio_doctor, orders.diagnosis, orders.result, orders.status_pay, orders.status from orders JOIN services ON orders.id_service = services.id_service where id_user = ?";
        $result=$this->db->query($sql, array($id_user));
        return $result->result_array();
    }
    public function user_hostel($id_user) {
        $sql = "select orders.id_order, orders.date, orders.type_animal, orders.breed, orders.nickname, orders.id_cell, orders.size_animal, orders.age, orders.date_from, orders.date_by, orders.note, orders.status_pay, orders.status from orders where name_service = 'Зоогостиница' and orders.id_user = ?";
        $result=$this->db->query($sql, array($id_user));
        return $result->result_array();
    }
    public function user_salon($id_user) {
        $sql = "select orders.id_order, orders.date, zoosalon.name_salon, orders.type_animal, orders.breed, orders.nickname, orders.salon_date, orders.salon_time, orders.fio_doctor, orders.status_pay, orders.status from orders JOIN zoosalon ON orders.id_salon = zoosalon.id_salon where orders.id_user = ?";
        $result=$this->db->query($sql, array($id_user));
        return $result->result_array();
    }
    public function user_store($id_user) {
        $sql = "select orders.id_order, orders.date, zooproducts.name_product, orders.col, orders.address_delivery, orders.price, orders.status_pay, orders.status from orders JOIN zooproducts ON orders.id_product = zooproducts.id_product where orders.id_user = ?";
        $result=$this->db->query($sql, array($id_user));
        return $result->result_array();
    }
    public function user_training($id_user) {
        $sql = "select orders.id_order, orders.date, orders.phone, orders.type_animal, orders.breed, orders.nickname, dogtraining.name_training, orders.address, orders.date_training, orders.time_training, orders.price, orders.status_pay, orders.status from orders JOIN dogtraining ON orders.id_training = dogtraining.id_training where orders.id_user = ?";
        $result=$this->db->query($sql, array($id_user));
        return $result->result_array();
    }
    public function check_appeals($id_user){
        $sql = "SELECT * FROM orders where category = 'Обращение к врачу' and id_user = ?";
        $result = $this->db->query($sql, array($id_user));
        return $result->result_array();
    }
}
?>