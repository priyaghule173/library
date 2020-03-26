<?php
class Verify extends CI_Controller
{
    
    function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('html','url','form'));
        $this->load->library('table');
        $this->load->model('stuLogin');
    }

    public function login()
    {
        $stuName =  $this->input->post('stu_name');
        $stuPass =  $this->input->post('stu_pass');
        $answer = $this->stuLogin->stuLogin_verify($stuName,$stuPass);
        if($answer)
        {
            $this->session->set_userdata('user_id',$answer);
            redirect('books');
        }
        else{
            redirect('stuLogin');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_id');
        return redirect('stuLogin');
    }
}
?>