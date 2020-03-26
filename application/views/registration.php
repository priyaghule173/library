<div class="container">
    
<?php
    echo anchor(base_url(). 'index','Home','class="btn btn-primary btn-mx"') . "<br><br><br>";

    echo "<center> <div class='loginForm'>";
    echo form_open('registration','class="form-group"');
    
    $nameAttribute = array('name'=>'name', 'class'=>'form-control','placeholder'=>'Write Your Name');
    echo  form_input($nameAttribute) . "<br>";

    $nameAttribute = array('type'=>'email','name'=>'email', 'class'=>'form-control','placeholder'=>'Write Your Email Address');
    echo form_input($nameAttribute) . "<br>";

    $nameAttribute = array('type'=>'password','name'=>'pass', 'class'=>'form-control','placeholder'=>'Password');
    echo form_input($nameAttribute);

    echo form_submit('submit','Submit','class="btn btn-primary btn-mx login-btn"');
    echo form_close();
    echo validation_errors();
    echo "</div> </center>";

?>


</div>