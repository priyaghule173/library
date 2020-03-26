<div class="container">
    
<?php
    echo heading('Books List',1,'class="h1_content"');
    $template = array(
        'table_open' => '<table border="0" class="bookTable" align="center">'
);
    $this->table->set_template($template);

    $this->table->set_heading('S.no', 'Book Name', 'Author Name', 'Quantity','Get Book');
    $getBook = anchor('books','Issue Book');
    foreach($result as $row)
    {
        $id = $row['id'];
        $bName = $row['bookName'];
        $aName = $row['authorName'];
        $quantity = $row['quantity'];
        $this->table->add_row($id,$bName,$aName,$quantity,$getBook);
    }
    echo $this->table->generate();
?>
</div>
