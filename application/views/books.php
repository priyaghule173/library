<div class="container">
<?php

    echo anchor(base_url(). 'verify/logout','Logout','class="btn btn-primary btn-mx"') . "<br><br>";
    echo heading('Books List',1,'class="h1_content"');
    $template = array(
        'table_open' => '<table border="0" class="bookTable" align="center">'
);
    $this->table->set_template($template);

    $this->table->set_heading('S.no', 'Book Name', 'Author Name', 'Quantity','Issue');
    $i=1;
    foreach($result as $row)
    {
        $id = $row['id'];
        $bName = $row['bookName'];
        $aName = $row['authorName'];
        $quantity = $row['quantity'];
        $issue = anchor(base_url() . 'books/issueBook/'. $id,'Issue', 'class="btn btn-primary btn-xs"');
        $this->table->add_row($i,$bName,$aName,$quantity,$issue);
        $i++;
    }
    echo $this->table->generate();
?>
</div>
