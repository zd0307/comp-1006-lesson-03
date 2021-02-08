<?php
    $conn= mysqli_connect('localhost','root',null,'comp_1006_lesson_03');
    $result=mysqli_query($conn,"Select*from countries");
    $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);
    var_dump($rows);

    

?>

<!DOCTYPE html>
    <head>
        <title>Countries</title>
    </head>

    <style>
        table, th, td {
             border: 1px solid black;

        }
        th,td{

            text-align: center;
        }
    </style>
    <body>
        <table>
            <thead>
             <tr>
                <th> name  </th>
                <th>  description  </th>
                <th>population  </th>
                
                </tr>
                
            </thead>
            <tbody>
                <?php
                    foreach($rows as $row){
                        echo "<tr>";
                        echo "<td>{$row['NAME']}</td>";
                        echo "<td>{$row['description']}</td>";
                        echo "<td>{$row['POPULATION']}</td>";
                        echo "</tr>";
                    }


                ?>
            </tbody>
        
        </table>
    
    
    </body>
</html>

