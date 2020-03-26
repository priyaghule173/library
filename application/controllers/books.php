<?php
class Books extends CI_Controller
{
    
    function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('html','url','form'));
        $this->load->library('table');
        $this->load->model('booksList');
        if(!$this->session->userdata('user_id'))
            return redirect('stuLogin');
    }

    public function index()
    {
        $this->load->view('header');
        $data['result'] = $this->booksList->getBooks();
        $this->load->view('books', $data);
        $this->load->view('footer');
    }

    public function issueBook($id)
    {
        $ans['result'] = $this->booksList->fetchBook($id);
        $this->load->view('header');
        $this->load->view('issueBook',$ans);        
        $this->load->view('footer');
    }

    public function issueBookData()
    {
        $id = $this->input->post('id');

        $this->form_validation->set_rules('name','Student Name','required');
        $this->form_validation->set_rules('contact','Student Contact Number','required');
        $this->form_validation->set_rules('return','Return Date','required');
        if($this->form_validation->run())
        {
            $data = array(
                'bookName' => $this->input->post('book'),
                'studentName' => $this->input->post('name'),
                'contact' => $this->input->post('contact'),
                'returnDate' => $this->input->post('return')
            );
            if($this->booksList->issuedBook($id,$data))
            {
                return redirect('books');
            }
            else
            {
                echo "<script>alert('Book is not available for issued');</script>";
                $this->load->view('header');
                $data['result'] = $this->booksList->getBooks();
                $this->load->view('books', $data);
                $this->load->view('footer');
            }
        }
        else
        {
            $ans['result'] = $this->booksList->fetchBook($id);
            $this->load->view('header');
            $this->load->view('issueBook',$ans);        
            $this->load->view('footer');
        }
        
        

    }
}
?>