<div class="container">
    
<?php
    echo anchor(base_url() . 'registration','Add Student','class="btn btn-primary btn-mx"') . "<br><br><br>";
    echo heading('Students List',1,'class="h1_content"');
    
    $template = array(
        'table_open' => '<table border="0" class="bookTable" align="center">'
);
    $this->table->set_template($template);
    $this->table->set_heading('S.no', 'Name', 'Email', 'Password','Delete');
    
    $i=1;
    foreach($result as $row)
    {   
        $id   = $row['id'];
        $name = $row['stuName'];
        $email= $row['stuEmail'];
        $pass = $row['stuPass'];
        $dlt = anchor(base_url().'studentList/delete/' . $id,'Delete','class="btn btn-primary btn-xs"');
        $this->table->add_row($i, $name, $email, $pass,$dlt);
        $i++;
        
    }
    echo $this->table->generate();
?>
</div>