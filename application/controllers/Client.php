<?php
class Client extends CI_Controller{
    public function logout(){
        session_destroy();
        redirect('main/index');
    }
    public function service_orders(){
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
            redirect('main/');
        }
        $id_user = $this->session->userdata('id_user');
        $this->load->model('orders');
        $data['orders'] = $this->orders->user_orders($id_user);
        $this->load->view('orders_service.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function pay_service(){
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('orders');
            $this->orders->pay_service($id_order);
            redirect('client/service_orders');
        }
    }
    public function cancel_service(){
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('orders');
            $this->orders->cancel_service($id_order);
            redirect('client/service_orders');
        }
    }
    public function pay_hostel(){
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('orders');
            $this->orders->pay_service($id_order);
            redirect('client/hostel_orders');
        }
    }
    public function cancel_hostel(){
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('orders');
            $this->orders->cancel_service($id_order);
            redirect('client/hostel_orders');
        }
    }
    public function pay_store(){
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('orders');
            $this->orders->pay_service($id_order);
            redirect('client/store_orders');
        }
    }
    public function cancel_store(){
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('orders');
            $this->orders->cancel_service($id_order);
            redirect('client/store_orders');
        }
    }
    public function pay_training(){
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('orders');
            $this->orders->pay_service($id_order);
            redirect('client/training_orders');
        }
    }
    public function cancel_training(){
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('orders');
            $this->orders->cancel_service($id_order);
            redirect('client/training_orders');
        }
    }
    public function pay_salon(){
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('orders');
            $this->orders->pay_service($id_order);
            redirect('client/salon_orders');
        }
    }
    public function cancel_salon(){
        if(!empty($_POST)){
            $id_order = $_POST['id_order'];
            $this->load->model('orders');
            $this->orders->cancel_service($id_order);
            redirect('client/salon_orders');
        }
    }
    public function catalog_addservices(){
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
        $this->load->view('catalog_addservices.php');
        $this->load->view('temp/footer.php');
    }
    public function hostel_orders(){
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
            redirect('main/');
        }
        $id_user = $this->session->userdata('id_user');
        $this->load->model('orders');
        $data['orders'] = $this->orders->user_hostel($id_user);
        $this->load->view('orders_hostel.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function store_orders(){
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
            redirect('main/');
        }
        $id_user = $this->session->userdata('id_user');
        $this->load->model('orders');
        $data['orders'] = $this->orders->user_store($id_user);
        $this->load->view('orders_store.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function salon_orders(){
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
            redirect('main/');
        }
        $id_user = $this->session->userdata('id_user');
        $this->load->model('orders');
        $data['orders'] = $this->orders->user_salon($id_user);
        $this->load->view('orders_salon.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function training_orders(){
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
            redirect('main/');
        }
        $id_user = $this->session->userdata('id_user');
        $this->load->model('orders');
        $data['orders'] = $this->orders->user_training($id_user);
        $this->load->view('orders_training.php', $data);
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
            redirect('main/');
        }
        $this->load->view('catalog_orders.php');
        $this->load->view('temp/footer.php');
    }
    public function catalog_services(){
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
        $this->load->model('services');
        $data['result'] = $this->services->select_services();
        $this->load->view('catalog_services.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function catalog_salon(){
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
        $this->load->model('services');
        $data['result'] = $this->services->select_zoosalon();
        $this->load->view('catalog_salon.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function catalog_products(){
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
        $this->load->model('services');
        $data['result'] = $this->services->select_zooproducts();
        $this->load->view('catalog_products.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function catalog_training(){
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
        $this->load->model('services');
        $data['result'] = $this->services->select_dogtraining();
        $this->load->view('catalog_training.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function services(){
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
        $this->load->view('servis.php');
        $this->load->view('temp/footer.php');
    }
    public function addservices(){
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
        $this->load->view('addservices.php');
        $this->load->view('temp/footer.php');
    }
    public function order_salon(){
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
            redirect('main/');
        }
        if(!empty($_GET)){
            $id_salon = $_GET['id_salon'];
            $name_salon = $_GET['name_salon'];
            $price = $_GET['price'];
            $data = [
                'id_salon' => $id_salon,
                'name_salon' => $name_salon,
                'price' => $price
            ];
        }
        $this->load->view('salon.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function new_order_salon(){
        if(!empty($_POST)){
            $date = date('Y-m-d');
            $id_user = $this->session->userdata('id_user');
            $fio = $this->session->userdata('fio');
            $id_salon = $_POST['id_salon'];
            $price = $_POST['price'];
            $type_animal = $_POST['type_animal'];
            $breed = $_POST['breed'];
            $nickname = $_POST['nickname'];
            $salon_date = $_POST['salon_date'];
            $salon_time = $_POST['salon_time'];
            $this->load->model('orders');
            $this->orders->add_order_salon($date, $id_user, $fio, $type_animal, $breed, $nickname, $id_salon, $salon_date, $salon_time, $price);
            redirect('client/salon_orders');
        }
    }
    public function order_training(){
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
            redirect('main/');
        }
        if(!empty($_GET)){
            $id_training = $_GET['id_training'];
            $name_training = $_GET['name_training'];
            $price = $_GET['price'];
            $data = [
                'id_training' => $id_training,
                'name_training' => $name_training,
                'price' => $price
            ];
        }
        $this->load->view('training.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function new_order_training(){
        if(!empty($_POST)){
            $date = date('Y-m-d');
            $id_user = $this->session->userdata('id_user');
            $fio = $this->session->userdata('fio');
            $id_training = $_POST['id_training'];
            $price = $_POST['price'];
            $phone = $_POST['phone'];
            $type_animal = $_POST['type_animal'];
            $breed = $_POST['breed'];
            $nickname = $_POST['nickname'];
            $address = $_POST['address'];
            $date_training = $_POST['date_training'];
            $time_training = $_POST['time_training'];
            $this->load->model('orders');
            $this->orders->add_order_training($date, $id_user, $fio, $phone, $type_animal, $breed, $nickname, $id_training, $address, $date_training, $time_training, $price);
            redirect('client/training_orders');
        }
    }
    public function order_hostel(){
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
            redirect('main/');
        }
        $this->load->model('cells');
        $data['cells'] = $this->cells->select_cells();
        $this->load->view('hostel.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function new_order_hostel(){
        if(!empty($_POST)){
            $date = date('Y-m-d');
            $id_user = $this->session->userdata('id_user');
            $fio = $this->session->userdata('fio');
            $type_animal = $_POST['type_animal'];
            $breed = $_POST['breed'];
            $nickname = $_POST['nickname'];
            $id_cell = $_POST['id_cell'];
            $size_animal = $_POST['size_animal'];
            $age = $_POST['age'];
            $date_from = $_POST['date_from'];
            $date_by = $_POST['date_by'];
            $note = $_POST['note'];
            $this->load->model('orders');
            $this->orders->add_order_hostel($date, $id_user, $fio, $type_animal, $breed, $nickname, $id_cell, $size_animal, $age, $date_from, $date_by, $note);
            redirect('client/hostel_orders');
        }
    }
    public function order_product(){
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
            redirect('main/');
        }
        if(!empty($_GET)){
            $id_product = $_GET['id_product'];
            $name_product = $_GET['name_product'];
            $price = $_GET['price'];
            $data = [
                'id_product' => $id_product,
                'name_product' => $name_product,
                'price' => $price
            ];
        }
        $this->load->view('product.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function new_order_product(){
        if(!empty($_POST)){
            $date = date('Y-m-d');
            $id_user = $this->session->userdata('id_user');
            $fio = $this->session->userdata('fio');
            $id_product = $_POST['id_product'];
            $col = $_POST['col'];
            $address_delivery = $_POST['address_delivery'];
            $price = $_POST['price'];
            $this->load->model('orders');
            $this->orders->add_order_product($date, $id_user, $fio, $id_product, $col, $address_delivery, $price);
            redirect('client/store_orders');
        }
    }
    public function service(){
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
            redirect('main/');
        }
        if(!empty($_GET)){
            $id_service = $_GET['id_service'];
            $type_service = $_GET['type_service'];
            $price = $_GET['price'];
            $data = [
                'id_service' => $id_service,
                'type_service' => $type_service,
                'price' => $price
            ];
        }

        $this->load->view('service.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function new_service(){
        if(!empty($_POST)){
            $date = date('Y-m-d');
            $id_user = $this->session->userdata('id_user');
            $fio = $this->session->userdata('fio');
            $type_animal = $_POST['type_animal'];
            $breed = $_POST['breed'];
            $nickname = $_POST['nickname'];
            $id_service = $_POST['id_service'];
            $price = $_POST['price'];
            $this->load->model('orders');
            $this->orders->add_order_service($date, $id_user, $fio, $type_animal, $breed, $nickname, $id_service, $price);
            redirect('client/service_orders');
        }
    }
    public function appeal(){
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
            redirect('main/');
        }
        if(!empty($_POST)){
            $date = date('Y-m-d');
            $id_user = $this->session->userdata('id_user');
            $fio = $this->session->userdata('fio');
            $type_animal = $_POST['type_animal'];
            $breed = $_POST['breed'];
            $nickname = $_POST['nickname'];
            $complaint = $_POST['complaint'];
            $this->load->model('orders');
            $this->orders->add_order_appeal($date, $id_user, $fio, $type_animal, $breed, $nickname, $complaint);
            redirect('client/requests');
        }
        $this->load->view('appeal.php');
        $this->load->view('temp/footer.php');
    }
    public function complaint(){
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
            redirect('main/');
        }
        $this->load->model('users');
        $data['doctors'] = $this->users->select_doctor();
        if(!empty($_POST)){
            $date_complaint = date('Y-m-d');
            $id_user = $this->session->userdata('id_user');
            $fio = $this->session->userdata('fio');
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $fio_doctor = $_POST['fio_doctor'];
            $details = $_POST['details'];
            $this->load->model('complaints');
            $this->complaints->add_complaint($id_user, $date_complaint, $fio, $phone, $email, $fio_doctor, $details);
            redirect('client/complaints');
        }
        $this->load->view('complaint.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function complaints(){
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
            redirect('main/');
        }
        $this->load->model('complaints');
        $id_user = $this->session->userdata('id_user');
        $data['complaints'] = $this->complaints->check_complaints($id_user);
        $this->load->view('check_complaints.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function requests(){
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
            redirect('main/');
        }
        $this->load->model('orders');
        $id_user = $this->session->userdata('id_user');
        $data['requests'] = $this->orders->check_appeals($id_user);
        $this->load->view('requests.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function personal(){
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
            redirect('main/');
        }
        $this->load->view('personal.php');
        $this->load->view('temp/footer.php');
    }
}
?>