<?php
class Chief extends CI_Controller{
    public function index(){
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            redirect('main/');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            redirect('main/');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            redirect('main/');
        }
        else{
            redirect('main/');
        }
        $this->load->view('chief.php');
        $this->load->view('temp/footer.php');
    }
    public function complaints(){
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            redirect('main/index');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            redirect('main/index');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            redirect('main/index');
        }
        else{
            redirect('main/index');
        }
        $this->load->model('complaints');
        $data['complaints'] = $this->complaints->select_complaints();
        if(!empty($_POST)){
            $id_answer = $_POST['id_answer'];
            $answer = $_POST['answer'];
            $this->complaints->update_complaint($answer, $id_answer);
            redirect('chief/complaints');
        }
        $this->load->view('complaints.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function report_services(){
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            redirect('main/index');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            redirect('main/index');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            redirect('main/index');
        }
        else{
            redirect('main/index');
        }
        $this->load->model('reports');
        $data['services'] = $this->reports->report_services();
        $data['all'] = $this->reports->all_report_services();
        $this->load->view('report_services.php', $data);
        $this->load->view('temp/footer.php');
    }
    public function report_personal(){
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            redirect('main/index');
        }
        else if(!empty($this->session->userdata('role') == 'Врач')){
            redirect('main/index');
        }
        else if(!empty($this->session->userdata('role') == 'Клиент')){
            redirect('main/index');
        }
        else{
            redirect('main/index');
        }
        $this->load->model('reports');
        $data['personal'] = $this->reports->report_personal();
        $data['all'] = $this->reports->all_report_personal();
        $this->load->view('report_personal.php', $data);
        $this->load->view('temp/footer.php');
    }
}
?>