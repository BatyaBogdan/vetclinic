<?php 
class Doctors extends CI_Model {


   public function update_order($fio_doctor, $diagnosis, $result, $id_order) {
      $sql = "UPDATE orders SET fio_doctor = ?, diagnosis = ?, result = ?, status = 'Услуга оказана' where id_order = ?";
      $result = $this->db->query($sql, array($fio_doctor, $diagnosis, $result, $id_order));
      return $result;
   }

   public function select_calls()  {
         $sql = "SELECT * FROM calls"; 
         $result = $this->db->query($sql);
         return $result->result_array();
   }

   public function update_call($id_call) {
      $sql = "UPDATE calls SET status = 'Заявка принята' WHERE id_call = ?";
      $result = $this->db->query($sql, array($id_call));
      return $result;
   }

   public function select_feedback() {
      $sql = "SELECT * FROM feedback";
      $result = $this->db->query($sql);
      return $result->result_array();
   }
   public function update_feedback($id_feedback) {
      $sql = "UPDATE feedback SET status = 'Заявка принята' WHERE id_feedback = ?";
      $result = $this->db->query($sql, array($id_feedback));
      return $result;
   }
   public function select_appeals() {
      $sql = "SELECT * FROM orders where category = 'Обращение к врачу'";
      $result = $this->db->query($sql);
      return $result->result_array();
   }
   public function update_appeal($fio_doctor, $objectively, $diagnosis, $result, $id_order) {
      $sql = "UPDATE orders SET fio_doctor = ?, objectively = ?, diagnosis = ?, result = ?, status = 'Заявка оказана' WHERE id_order = ?";
      $result = $this->db->query($sql, array($fio_doctor, $objectively, $diagnosis, $result, $id_order));
      return $result;
   }
   public function select_salons() {
      $sql = "select orders.id_order, orders.date, orders.fio, zoosalon.name_salon, orders.type_animal, orders.breed, orders.nickname, orders.salon_date, orders.salon_time, orders.fio_doctor, orders.status_pay, orders.status from orders JOIN zoosalon ON orders.id_salon = zoosalon.id_salon";
      $result=$this->db->query($sql);
      return $result->result_array();
   }
   public function update_salons($fio_doctor, $id_order) {
      $sql = "UPDATE orders SET fio_doctor = ?, status = 'Услуга оказана' where id_order = ?";
      $result = $this->db->query($sql, array($fio_doctor, $id_order));
      return $result;
   }
   public function select_products() {
      $sql = "select orders.id_order, orders.date, orders.fio, zooproducts.name_product, orders.col, orders.address_delivery, orders.price, orders.status_pay, orders.status from orders JOIN zooproducts ON orders.id_product = zooproducts.id_product";
      $result=$this->db->query($sql);
      return $result->result_array();
   }
   public function update_products($fio_doctor, $id_order) {
      $sql = "UPDATE orders SET fio_doctor = ?, status = 'Услуга оказана' where id_order = ?";
      $result = $this->db->query($sql, array($fio_doctor, $id_order));
      return $result;
   }
   public function select_training() {
      $sql = "select orders.id_order, orders.date, orders.fio, orders.phone, orders.type_animal, orders.breed, orders.nickname, dogtraining.name_training, orders.address, orders.date_training, orders.time_training, orders.price, orders.status_pay, orders.status from orders 
JOIN dogtraining ON orders.id_training = dogtraining.id_training";
      $result=$this->db->query($sql);
      return $result->result_array();
   }
   public function update_training($fio_doctor, $id_order) {
      $sql = "UPDATE orders SET fio_doctor = ?, status = 'Услуга оказана' where id_order = ?";
      $result = $this->db->query($sql, array($fio_doctor, $id_order));
      return $result;
   }
   public function select_hostels() {
      $sql = "select orders.id_order, orders.date, orders.fio, orders.type_animal, orders.breed, orders.nickname, orders.id_cell, orders.size_animal, orders.age, orders.date_from, orders.date_by, orders.note, orders.status_pay, orders.status from orders where name_service = 'Зоогостиница'";
      $result=$this->db->query($sql);
      return $result->result_array();
   }
   public function update_hostel($fio_doctor, $id_order) {
      $sql = "UPDATE orders SET fio_doctor = ?, status = 'Принята' where id_order = ?";
      $result = $this->db->query($sql, array($fio_doctor, $id_order));
      return $result;
   }
   public function update_cell($id_cell) {
      $sql = "UPDATE cells SET status = 'Занято' where id_cell = ?";
      $result = $this->db->query($sql, array($id_cell));
      return $result;
   }
   public function update_end_hostel($id_order) {
      $sql = "UPDATE orders SET id_cell = NULL, status = 'Услуга оказана' where id_order = ?";
      $result = $this->db->query($sql, array($id_order));
      return $result;
   }
   public function update_number_cell($id_cell) {
      $sql = "UPDATE cells SET status = 'Место свободно' where id_cell = ?";
      $result = $this->db->query($sql, array($id_cell));
      return $result;
   }
   public function delete_order($id_order) {
      $sql = "DELETE FROM orders where id_order = ?";
      $result = $this->db->query($sql, array($id_order));
      return $result;
   }
   public function delete_call($id_call) {
      $sql = "DELETE FROM calls where id_call = ?";
      $result = $this->db->query($sql, array($id_call));
      return $result;
   }
   public function delete_feedback($id_feedback) {
      $sql = "DELETE FROM feedback where id_feedback = ?";
      $result = $this->db->query($sql, array($id_feedback));
      return $result;
   }
   public function delete_appeal($id_order) {
      $sql = "DELETE FROM orders where id_order = ?";
      $result = $this->db->query($sql, array($id_order));
      return $result;
   }
}
?>