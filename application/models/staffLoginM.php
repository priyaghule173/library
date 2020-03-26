<?php
class StaffLoginM extends CI_Model
{
    
    public function staffVerify($name,$password)
    {
        $this->db->select()->from('staff');
        $this->db->where('name', $name);
        $this->db->where('password', $password);
        $query = $this->db->get();

        //$query = select * from staff where 'name'=$name AND 'password'=$password

        if($query->num_rows())
        {
            return $query->row()->id;
            //return TRUE;
        }else{
            return FALSE;
        }
    }
}
?>