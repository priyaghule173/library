<?php
class StuLogin extends CI_Controller
{
    
    function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('html','url','form'));
        $this->load->library('table');
    }
    public function index()
    {
        $this->load->view('header');
        $this->load->view('stuLognForm');
        $this->load->view('footer');
    }
}
?>