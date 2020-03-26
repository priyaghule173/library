<?php
class Registration extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('html','url','form'));
        $this->load->library('table');
        $this->load->model('studentRegistration');
    }
    public function index()
    {
        if($_POST)
        {
            $this->form_validation->set_rules('name','Student Name','required|is_unique[students.stuName]');
            $this->form_validation->set_rules('email','Email Address','required');
            $this->form_validation->set_rules('pass','Password','required');

            if($this->form_validation->run())
            {
                $data = array(
                    'stuName'  =>  $this->input->post('name'),
                    'stuEmail'  =>  $this->input->post('email'),
                    'stuPass'  =>  $this->input->post('pass')
                );
                //$this->modelname->functionName
                $this->studentRegistration->stuRegistration($data);
                redirect('books');
            }
            else
            {
                $this->load->view('header');
                $this->load->view('registration');
                $this->load->view('footer');
            }

        }
        else
        {
            $this->load->view('header');
            $this->load->view('registration');
            $this->load->view('footer');
        }
    }
    
}
?>