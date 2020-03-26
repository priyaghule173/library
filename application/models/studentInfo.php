<?php
class StudentInfo extends CI_Model
{
    
    function __construct(){
        parent:: __construct();
    }

    public function studentData()
    {
        //select * from students
        $this->db->select()->from('students');
        //$run = mysql_query();
        $query = $this->db->get();
        //mysql_fetch_array($run);
        return $query->result_array();
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('students');
        redirect('studentList');
    }

}
?>