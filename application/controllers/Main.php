<?php
class Main extends CI_Controller{
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
        $this->load->view('index.php');
        $this->load->view('temp/footer.php');
    }
    public function about_us(){
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
        $this->load->view('about_us.php');
        $this->load->view('temp/footer.php');
    }
    public function contacts(){
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
        $this->load->view('contact.php');
        $this->load->view('temp/footer.php');
    }
    public function call(){
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
        if(!empty($_POST)){
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $date_call = date('Y-m-d');
            $this->load->model('calls');
            $this->calls->add_call($name, $phone, $date_call);
            redirect('main/');
        }
        $this->load->view('call.php');
        $this->load->view('temp/footer.php');
    }
    public function feedback(){
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
        if(!empty($_POST)){
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $message = $_POST['message'];
            $date_feedback = date('Y-m-d');
            $this->load->model('feedback');
            $this->feedback->add_feedback($name, $phone, $message, $date_feedback);
            redirect('main/');
        }
        $this->load->view('feedback.php');
        $this->load->view('temp/footer.php');
    }
    public function price(){
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
        $data['services'] = $this->services->select_services();
        $data['dogtraining'] = $this->services->select_dogtraining();
        $data['zooproducts'] = $this->services->select_zooproducts();
        $data['zoosalon'] = $this->services->select_zoosalon();
        $this->load->view('price.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function registration(){
        if(!empty($_POST)){
            $url = 'uploads/';
            $fio = $_POST['fio'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $photo = 'img/avatar.jpg';
            if(!empty($_FILES['photo']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = 5120;
                $config['file_name'] = uniqid();
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('photo')) {
                    $upload_data = $this->upload->data();
                    $photo = $url . $upload_data['file_name'];
                }
                else {
                    $error = $this->upload->display_errors();
                }
            }
            $this->load->model('users');
            $this->users->insert_user($fio, $phone, $email, $photo, $login, $password);
            redirect('main/index');
        }
    }
    public function login(){
        if(!empty($_POST)){
            $login = $_POST['login'];
            $password = $_POST['password'];
            $this->load->model('users');
            $user = $this->users->select_user($login, $password);
            if($user){
                $user = array(
                    'id_user' => $user['id_user'],
                    'fio' => $user['fio'],
                    'photo' => $user['photo'],
                    'role' => $user['role']
                );
                $this->session->set_userdata($user);
                if($this->session->userdata('role') == 'Заведующий'){
                    redirect('chief/');
                }
                else if($this->session->userdata('role') == 'Бухгалтер'){
                    redirect('main/');
                }
                else if($this->session->userdata('role') == 'Врач'){
                    redirect('doctor/');
                }
                else if($this->session->userdata('role') == 'Клиент'){
                    redirect('client/personal');
                }
            }
            else{
                $this->session->set_flashdata('error', 'Ошибка! Неверный логин или пароль');
                redirect('main/index');
            }
        }
    }
}
?>