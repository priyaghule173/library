<div class="container">
    
<?php
    echo "<center> <div class='loginForm'>";
    foreach($result as $row)
        {
            echo form_open('staffHome/updateBook','class="form-group"');

            $nameAttribute = array('name'=>'book', 'class'=>'form-control','value'=>$row->bookName);
            echo  form_input($nameAttribute) . "<br>";

            echo form_hidden('id',$row->id);

            $authorAttribute = array('name'=>'author', 'class'=>'form-control','value'=>$row->authorName);
            echo form_input($authorAttribute) . "<br>";

            $quantityAttribute = array('name'=>'quantity', 'class'=>'form-control','value'=>$row->quantity);
            echo form_input($quantityAttribute);

            echo  form_submit('submit','Update','class="btn btn-primary btn-mx login-btn"');
            echo form_close();
        }
        echo "</div></center>";
?>
</div>