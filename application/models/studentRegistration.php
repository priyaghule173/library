<?php
class StudentRegistration extends CI_Model
{
  
   function __construct()
   {
       parent:: __construct();
   }

   public function stuRegistration($data)
   {
       //$this->selectDB->insert('tableName',Data/Info for insert);
       $this->db->insert('students',$data);
       return "Successfully Registeration";
   }
}
?>