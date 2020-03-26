<div class="container">

  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><?php echo anchor(base_url(). 'staffHome/addBook','Add Book'); ?></li>
      <li><?php echo anchor(base_url(). 'staffHome/issuedBooks','Issued Books'); ?></li>
      <li><?php echo anchor(base_url(). 'studentList','Student List'); ?></li>
      <div class="dropdown-divider">-------------------------------</div>
      <li><?php echo anchor(base_url(). 'staffHome/staffLogout','Logout'); ?></li>
    </ul>

  </div><br><br><br>

<?php

    // echo anchor(base_url(). 'staffHome/staffLogout','Logout','class="btn btn-primary btn-mx"');
    // echo anchor(base_url(). 'staffHome/addBook','Add Book','class="btn btn-primary btn-mx"');
    // echo anchor(base_url(). 'staffHome/issuedBooks','Issued Books','class="btn btn-primary btn-mx"');
    // echo anchor('studentList','Student List','class="btn btn-primary btn-mx"') . "<br><br><br>";

    echo  heading('Books List',1,'class="h1_content"');
    $template = array(
        'table_open' => '<table border="0" class="bookTable" align="center">'
);
    $this->table->set_template($template);
 
    $this->table->set_heading('S.no', 'Book Name', 'Author Name', 'Quantity','Edit','Delete');
   
    $i=1;
    foreach($result as $row)
    {
        $id = $row['id'];
        $bName = $row['bookName'];
        $aName = $row['authorName'];
        $quantity = $row['quantity'];
        $editBook = anchor(base_url().'staffHome/editBook/' . $id,'Edit','class="btn btn-primary btn-xs"');
        $dltBook = anchor(base_url().'staffHome/dltBook/' . $id,'Delete','class="btn btn-primary btn-xs"');
        $this->table->add_row($i,$bName,$aName,$quantity,$editBook,$dltBook);
        $i++;
    }
    echo $this->table->generate();
?>
</div>
