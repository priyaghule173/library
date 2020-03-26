<?php
class StuLogin extends CI_Model
{
    
    public function stuLogin_verify($stu_name,$stu_pass)
    {
        $this->db->select()->from('students');
        $this->db->where('stuName', $stu_name);
        $this->db->where('stuPass', $stu_pass);
        $query = $this->db->get();
        if($query->num_rows())
        {
            return $query->row()->id;
            //return $query->result();
        }
        else
        {
            return false;
        }
    }
}
?>