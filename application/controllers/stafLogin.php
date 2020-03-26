<?php
class stafLogin extends CI_Controller
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
        $this->load->view('stafLogn');
        $this->load->view('footer');
    }

    public function stafVerify()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','User Name','required|alpha|trim');
        $this->form_validation->set_rules('pass','User Password','required');
        if($this->form_validation->run())
        {
            $name = $this->input->post('name');
            $password = $this->input->post('pass');
            
            $this->load->model('staffLoginM');

            $login_id =  $this->staffLoginM->staffVerify($name,$password);
            if($login_id)
            {
                $this->load->library('session');
                $this->session->set_userdata('id',$login_id);
                return redirect('staffHome');
            }
            else
            {
                $this->load->view('header');
                $this->load->view('stafLogn');
                $this->load->view('footer');
            }
        }
        else
        {
            $this->load->view('header');
            $this->load->view('stafLogn');
            $this->load->view('footer');
        }
    }
}
?>