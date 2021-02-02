<?php

    



    //store the value into countries
    $results = mysqli_query($mysqli,"
        INSERT INTO countries (

            NAME,
            description,
            population
        )
         values(
            
            '{$_POST['name']}',
            '{$_POST['description']}',
            {$_POST['population']}
        )
    ");

    if($results){
        echo "The new country was created successfully";
    }else{
        $error =mysqli_error($mysqli);
        echo "There is an error";
        echo "{$error}";
    }


?>