<div class="container">
<?php

    echo heading('Issued Books',1,'class="h1_content"');
    $template = array(
        'table_open' => '<table border="0" class="bookTable" align="center">'
    );
    $this->table->set_template($template);
 
    $this->table->set_heading('S.no', 'Student Name', 'Book Name', 'Contact no','Return Date','Returned');
   
    $i=1;
    foreach($result as $row)
    {
        $id = $row['id'];
        $sName = $row['studentName'];
        $bName = $row['bookName'];
        $contact = $row['contact'];
        $returnDate = $row['returnDate'];
        $dltBook = anchor(base_url().'staffHome/returnBook/' . $id,'Returned','class="btn btn-primary btn-xs"');
        $this->table->add_row($i,$sName,$bName,$contact,$returnDate,$dltBook);
        $i++;
    }
    echo $this->table->generate();
?>
</div>