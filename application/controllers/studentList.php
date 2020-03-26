<?php
class studentList extends CI_Controller
{
    
    function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('html','url','form'));
        $this->load->library('table');
        $this->load->model('studentInfo');
    }

    public function index()
    {
        $this->load->view('header');      
        $studentData['result'] = $this->studentInfo->studentData();
        $this->load->view('studentList', $studentData);
        $this->load->view('footer');
    }

    public function delete($id)
    {
        $this->studentInfo->delete($id);
    }
}
?>