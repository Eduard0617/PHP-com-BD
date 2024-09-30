<?php

    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "defaultBase";
    $conn = mysqli_connect($host, $user, $pass, $base);

    $answ = mysqli_query($conn, "select * from carros where id = 1   or id = 3");

    echo "<table border=3px>
    <tr class='header'> 
        <td>Código do veículo</td>
        <td>Montadora</td>
        <td>Modelo</td>
        <td>Cor</td>
    </tr>";
 
    while($write =mysqli_fetch_array($answ)){
        echo "<tr> 
                <td>".$write['id'] ."</td>".
                "<td>".$write['modelo'] ."</td>".
                "<td>".$write['montadora'] ."</td>".
                "<td>".$write['cor'] ."</td>
            </tr>";             
    }

    echo "</table>";

?>