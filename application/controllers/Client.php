<?php
class Client extends CI_Controller{
    public function logout(){
        session_destroy();
        redirect('main/index');
    }
}
?>