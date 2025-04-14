<?php
class Doctor extends CI_Controller{
    public function index(){
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            $this->load->view('temp/navbar_accountant.php');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            $this->load->view('temp/navbar_doctor.php');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            $this->load->view('temp/navbar_client.php');
        }
        else{
            $this->load->view('temp/navbar.php');
        }
        $this->load->view('doctor.php');
        $this->load->view('temp/footer.php');
    }
    public function orders(){
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            $this->load->view('temp/navbar_accountant.php');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            $this->load->view('temp/navbar_doctor.php');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            $this->load->view('temp/navbar_client.php');
        }
        else{
            $this->load->view('temp/navbar.php');
        }
        $this->load->model('orders');
        $data['orders'] = $this->orders->select_orders();
        if(!empty($_POST)){
            $fio_doctor = $this->session->userdata('fio');
            $id_order = $_POST['id_order'];
            $diagnosis = $_POST['diagnosis'];
            $result = $_POST['result'];
            $this->load->model('doctors');
            $this->doctors->update_order($fio_doctor, $diagnosis, $result, $id_order);
            redirect('doctor/orders');
        }
        $this->load->view('orders.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function calls(){
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            $this->load->view('temp/navbar_accountant.php');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            $this->load->view('temp/navbar_doctor.php');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            $this->load->view('temp/navbar_client.php');
        }
        else{
            $this->load->view('temp/navbar.php');
        }
        $this->load->model('doctors');
        $data ['select_calls'] = $this->doctors->select_calls(); 
        if(!empty($_POST)) {
            $id_call = $_POST['id_call'];
            $this->doctors->update_call($id_call);
            redirect('doctor/calls');
        }
        $this->load->view('calls.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function feedback() {
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            $this->load->view('temp/navbar_accountant.php');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            $this->load->view('temp/navbar_doctor.php');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            $this->load->view('temp/navbar_client.php');
        }
        else{
            $this->load->view('temp/navbar.php');
        }
        $this->load->model('doctors');
        $data['feedback'] = $this->doctors->select_feedback(); 
        if(!empty($_POST)){
            $id_feedback = $_POST['id_feedback'];
            $this->doctors->update_feedback($id_feedback);
            redirect('doctor/feedback');
        }
        $this->load->view('feedback_doctor.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function appeals() {
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            $this->load->view('temp/navbar_accountant.php');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            $this->load->view('temp/navbar_doctor.php');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            $this->load->view('temp/navbar_client.php');
        }
        else{
            $this->load->view('temp/navbar.php');
        }
        $this->load->model('doctors');
        $data['orders'] = $this->doctors->select_appeals(); 
        if(!empty($_POST)){
            $fio_doctor = $this->session->userdata('fio');
            $id_order = $_POST['id_order'];
            $objectively = $_POST['objectively'];
            $diagnosis = $_POST['diagnosis'];
            $result = $_POST['result'];
            $this->doctors->update_appeal($fio_doctor, $objectively, $diagnosis, $result, $id_order);
            redirect('doctor/appeals');
        }
        $this->load->view('appeals.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function salon_orders() {
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            $this->load->view('temp/navbar_accountant.php');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            $this->load->view('temp/navbar_doctor.php');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            $this->load->view('temp/navbar_client.php');
        }
        else{
            $this->load->view('temp/navbar.php');
        }
        $this->load->model('doctors');
        $data['orders'] = $this->doctors->select_salons();
        if(!empty($_POST)){
            $fio_doctor = $this->session->userdata('fio');
            $id_order = $_POST['id_order'];
            $this->doctors->update_salons($fio_doctor, $id_order);
            redirect('doctor/salon_orders');
        }
        $this->load->view('salon_orders.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function store_orders() {
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            $this->load->view('temp/navbar_accountant.php');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            $this->load->view('temp/navbar_doctor.php');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            $this->load->view('temp/navbar_client.php');
        }
        else{
            $this->load->view('temp/navbar.php');
        }
        $this->load->model('doctors');
        $data['orders'] = $this->doctors->select_products();
        if(!empty($_POST)){
            $fio_doctor = $this->session->userdata('fio');
            $id_order = $_POST['id_order'];
            $this->doctors->update_products($fio_doctor, $id_order);
            redirect('doctor/store_orders');
        }
        $this->load->view('store_orders.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function training_orders() {
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            $this->load->view('temp/navbar_accountant.php');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            $this->load->view('temp/navbar_doctor.php');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            $this->load->view('temp/navbar_client.php');
        }
        else{
            $this->load->view('temp/navbar.php');
        }
        $this->load->model('doctors');
        $data['orders'] = $this->doctors->select_training();
        if(!empty($_POST)){
            $fio_doctor = $this->session->userdata('fio');
            $id_order = $_POST['id_order'];
            $this->doctors->update_training($fio_doctor, $id_order);
            redirect('doctor/training_orders');
        }
        $this->load->view('training_orders.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function hostel_orders() {
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            $this->load->view('temp/navbar_accountant.php');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            $this->load->view('temp/navbar_doctor.php');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            $this->load->view('temp/navbar_client.php');
        }
        else{
            $this->load->view('temp/navbar.php');
        }
        $this->load->model('doctors');
        $data['orders'] = $this->doctors->select_hostels();
        if(!empty($_POST)){
            $fio_doctor = $this->session->userdata('fio');
            $id_order = $_POST['id_order'];
            $id_cell = $_POST['id_cell'];
            $this->doctors->update_cell($id_cell);
            $this->doctors->update_hostel($fio_doctor, $id_order);
            redirect('doctor/hostel_orders');
        }
        $this->load->view('hostel_orders.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function end_hostel() {
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $id_cell = $_POST['id_cell'];
            $this->load->model('doctors');
            $this->doctors->update_end_hostel($id_order);
            $this->doctors->update_number_cell($id_cell);
            redirect('doctor/hostel_orders');
        }
    }
    public function delete_order() {
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('doctors');
            $this->doctors->delete_order($id_order);
            redirect('doctor/orders');
        }
    }
    public function delete_call() {
        if(!empty($_POST)){
            $id_call = $_POST['id_call'];
            $this->load->model('doctors');
            $this->doctors->delete_call($id_call);
            redirect('doctor/calls');
        }
    }
    public function delete_feedback() {
        if(!empty($_POST)){
            $id_feedback = $_POST['id_feedback'];
            $this->load->model('doctors');
            $this->doctors->delete_feedback($id_feedback);
            redirect('doctor/feedback');
        }
    }
    public function delete_appeal() {
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('doctors');
            $this->doctors->delete_appeal($id_order);
            redirect('doctor/appeals');
        }
    }
    public function delete_order_store() {
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('doctors');
            $this->doctors->delete_order($id_order);
            redirect('doctor/store_orders');
        }
    }
    public function delete_order_salon() {
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('doctors');
            $this->doctors->delete_order($id_order);
            redirect('doctor/salon_orders');
        }
    }
    public function delete_order_training() {
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('doctors');
            $this->doctors->delete_order($id_order);
            redirect('doctor/training_orders');
        }
    }
    public function delete_order_hostel() {
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('doctors');
            $this->doctors->delete_order($id_order);
            redirect('doctor/hostel_orders');
        }
    }
}
?>