<div class="container">
    
<?php
    echo anchor(base_url(). 'index','Home','class="btn btn-primary btn-mx"') . "<br><br><br>";

    echo "<center> <div class='loginForm'>";
    echo form_open('verify/login','class="form-group"');

    $nameAttribute = array('name'=>'stu_name', 'class'=>'form-control','placeholder'=>'Student Name');
    echo form_input($nameAttribute) . "<br>";
    $nameAttribute = array('type'=>'password','name'=>'stu_pass', 'class'=>'form-control','placeholder'=>'Password');
    echo form_input($nameAttribute);

    echo form_submit('login','Login','class="btn btn-primary btn-mx login-btn"');
    echo form_close();
    echo "</div></center>";

?>


</div>