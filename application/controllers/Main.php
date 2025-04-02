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
    public function registration(){
        if(!empty($_POST)){
            $fio = $_POST['fio'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $this->load->model('users');
            $this->users->insert_user($fio, $phone, $email, $login, $password);
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
                    'role' => $user['role']
                );
                $this->session->set_userdata($user);
                redirect('main/index');
            }
            else{
                $this->session->set_flashdata('error', 'Ошибка! Неверный логин или пароль');
                redirect('main/index');
            }
        }
    }
}
?>