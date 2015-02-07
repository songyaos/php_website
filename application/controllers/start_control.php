<?php
/**
 * Created by PhpStorm.
 * User: songyaoshanzhang
 * Date: 2015/2/6
 * Time: 11:53
 */
class Start_control extends CI_Controller{
    public function index(){
        $this->load->helper('url');

        $this->load->view('/templates/header');
        $this->load->view('templates/nav');
        $this->load->view('start_home');
        $this->load->view('/templates/footer');
    }
    public function view($page = 'start_home'){
        $this->load->helper('url');

        $this->load->view('/templates/header');
        $this->load->view('templates/nav');
        $this->load->view('start_home');
        $this->load->view('/templates/footer');
}

}