<?php
/**
 * Created by PhpStorm.
 * User: songyaoshanzhang
 * Date: 2015/2/6
 * Time: 11:53
 */
class Start_control extends CI_Controller{
    public function index(){
        $this->load->view('start_home');
    }
    public function view($page = 'start_home'){
        $this->load->view('start_home');
}

}