<?php
    //链接这个数据库，host，user，password，database
    $mysqli = mysqli_connect('localhost','root',null,'comp_1006_lesson_03');

    if(mysqli_connect_errno($mysqli)){
        
        echo "Wrong connection";

    }else{
        echo "connection ready";
    }


?>
