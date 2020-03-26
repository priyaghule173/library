<div class="container">
<?php


    echo "<center> <div class='loginForm'>";
    echo form_open('staffHome/getBookData','class="form-group"');
    
    $nameAttribute = array('name'=>'book_name', 'class'=>'form-control','placeholder'=>'Write Book Name');
    echo  form_input($nameAttribute) . "<br>";

    $attribute = array('name'=>'author_name', 'class'=>'form-control','placeholder'=>'Write Author Name');
    echo form_input($attribute) . "<br>";

    $attribute = array('name'=>'quantity', 'class'=>'form-control','placeholder'=>'Book Quantity');
    echo form_input($attribute);

    echo form_submit('submit','Add Now','class="btn btn-primary btn-mx login-btn"');

    echo form_close();
    echo validation_errors();
    echo "</div></center>";

?>


</div>