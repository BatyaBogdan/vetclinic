<?php
class Accountant extends CI_Controller{
    public function report_services(){
        $this->load->view('temp/head.php');
        if(!empty($this->session->userdata('role') == 'Заведующий')){
            $this->load->view('temp/navbar_chief.php');
        }
        else if(!empty($this->session->userdata('role') == 'Бухгалтер')){
            $this->load->view('temp/navbar_accountant.php');
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
}
?>