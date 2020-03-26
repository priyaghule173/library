<?php
class Index extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('html','url'));
    }
    public function index()
    {
        $this->load->view('header');
        $this->load->view('content');
        $this->load->view('footer');
    }
    
}
?>