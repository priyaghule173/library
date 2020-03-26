<?php
class booksList extends CI_Model
{

    public function getBooks()
    {
        $this->db->select()->from('books');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function fetchBook($id)
    {
       $this->db->select()->from('books');
       $this->db->where('id', $id);
       $query = $this->db->get();

       if($query->num_rows() == 1)
       {
           return $query->result();
       }
    }

    public function updateBook($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('books',$data);
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('books');
        redirect('staffHome');
    }

    public function addBook($data)
    {
        //$this->selectDB->insert('tableName',Data/Info for insert);
       $this->db->insert('books',$data);
       return TRUE;
    }


    public function issuedBook($id,$data)
    {       
        //$this->db->insert('issuedBooks',$data);
        $this->db->select()->from('books');
        $this->db->where('id', $id);
        $query = $this->db->get();

        foreach ($query->result_array() as $row)
        {
            $update1 = array(
                'bookName' => $row['bookName'],
                'authorName' => $row['authorName'],
                'quantity' => $row['quantity']-1,
            );
        }
        if($row['quantity'] > 1)
        {
            $this->db->insert('issuedBooks',$data);
            $this->db->where('id',$id);
            $this->db->update('books',$update1);
            return TRUE;
        }
    }

    public function returnBook($id)
    {   
        $this->db->select()->from('issuedBooks');
        $this->db->where('id', $id);
        //$query = $this->db->get();
        $result1 =$this->db->get()->result_array();
    //    print_r($result1);exit;
        foreach ($result1 as $row)
        {
            $bookName = $row['bookName'];
        }
//print_r($bookName);exit;
        $this->db->select()->from('books');
        $this->db->where('bookName',$bookName);
        $result2 =$this->db->get()->result_array();
//print_r($result2);exit;
        foreach ($result2 as $row)
        {
            $update2 = array(
                'quantity' => $row['quantity']+1,
            );
        }

        $this->db->where('bookName',$bookName);
        $this->db->update('books',$update2);

        $this->db->select()->from('issuedBooks');
        $this->db->where('id', $id);
        $this->db->delete('issuedBooks');
    }

    public function getIssuedBooks()
    {
        $this->db->select()->from('issuedbooks');
        $query = $this->db->get();
        return $query->result_array();
    }
    
}
?>