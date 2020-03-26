<?php
class StaffHome extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('booksList');
        if(!$this->session->userdata('id'))
            return redirect('stafLogin');
    }

    public function index()
    {
        $this->load->view('header');
        $data['result'] = $this->booksList->getBooks();
        $this->load->view('staffDashboard', $data);
        $this->load->view('footer');
    }

    public function editBook($id)
    {
        $ans['result'] = $this->booksList->fetchBook($id);
        $this->load->view('header');
        $this->load->view('insertBook',$ans);        
        $this->load->view('footer');
    }

    public function updateBook()
    {
        $id = $this->input->post('id');

        $data = array(
            'bookName' => $this->input->post('book'),
            'authorName' => $this->input->post('author'),
            'quantity' => $this->input->post('quantity')
        );
        $this->booksList->updateBook($id,$data);
        redirect('staffHome');
    }

    public function dltBook($id)
    {
        $this->booksList->delete($id);
    }

    public function addBook()
    {
        $this->load->view('header');
        $this->load->view('addBook');
        $this->load->view('footer');
    }

    public function getBookData()
    {
        $this->form_validation->set_rules('book_name','Book Name','required|is_unique[books.bookName]');
        $this->form_validation->set_rules('author_name','Author Name','required');
        $this->form_validation->set_rules('quantity','Book Quantity','required');

        if($this->form_validation->run())
        {
            $data = array(
            'bookName'  =>  $this->input->post('book_name'),
            'authorName'  =>  $this->input->post('author_name'),
            'quantity'  =>  $this->input->post('quantity')
            );

            if($this->booksList->addBook($data))
            {
                redirect('staffHome');
            }   
        }
        else
        {
            $this->load->view('header');
            $this->load->view('addBook');
            $this->load->view('footer');
        }
    }

    public function issuedBooks()
    {
        $this->load->view('header');
        $data['result'] = $this->booksList->getIssuedBooks();
        $this->load->view('issuedBookList', $data);
        $this->load->view('footer');
    }

    public function returnBook($id)
    {
        $this->booksList->returnBook($id);
        redirect('staffHome/issuedBooks');
        
    }

    public function staffLogout()
    {
        $this->session->unset_userdata('id');
        return redirect('stafLogin');
    }

    
}
?>