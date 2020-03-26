<div class="container">
<?php

    echo "<center> <div class='loginForm'>";
    foreach($result as $row)
        {
            echo form_open('books/issueBookData','class="form-group"');

            echo form_hidden('id',$row->id);
            echo form_hidden('book',$row->bookName);
            echo form_hidden('author',$row->authorName);
            echo form_hidden('quantity',$row->quantity - 1);
 
            $nameAttribute = array('name'=>'name', 'class'=>'form-control','placeholder'=>'Write Your Name');
            echo form_input($nameAttribute) . "<br>";

            $contactAttribute = array('name'=>'contact', 'class'=>'form-control','placeholder'=>'Write Your Contact Number');
            echo form_input($contactAttribute) . "<br>";

            $returnAttribute = array('name'=>'return', 'class'=>'form-control','placeholder'=>'Write Return Date');
            echo form_input($returnAttribute);

            echo form_submit('submit','Submit','class="btn btn-primary btn-mx login-btn"');
            echo form_close();
        }
        echo validation_errors();
        echo "</div> </center>";
?>
</div>