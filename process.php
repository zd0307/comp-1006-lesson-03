<?php

    $mysqli = mysqli_connect('localhost','root',null,'comp_1006_lesson_03');
    var_dump($_POST);

    $res=mysqli_query($mysqli,"
        insert into countries(
            name,
            description,
            population



        )values(
            '{$_POST['name']}',
            '{$_POST['des']}',
            {$_POST[pop]}



        )
    
    
    
    
    ");

    if($res){
        echo "we are successful";
    }else{
        echo "There was an error creating the record:".mysqli_error($mysqli);
    }



?>