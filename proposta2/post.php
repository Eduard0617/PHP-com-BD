<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe Carros</title>
    <style>

        table {
            margin: auto;
            margin-top: 30px;
        }

        td {
            padding: 5px;
        }

        .header {
            color: blue;
        }

    </style>
</head>
<body>
</body>
</html>
<?php

    $id =           $_POST["id"];
    $modelo =       $_POST["modelo"];
    $montadora =    $_POST["montadora"];
    $cor =          $_POST["cor"];

    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "defaultBase";
    $conn = mysqli_connect($host, $user, $pass, $base);

    try {

        mysqli_query($conn, "insert into carros values($id, '$modelo', '$montadora', '$cor')");

        $answ = mysqli_query($conn, "select * from carros");

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
    
    }  catch (Exception $e) {
        echo "<h1>erro ao cadastrar dados!</h1><h2>Confira se os dados cadastrados estão corretos</h2>";

    }   
    
    catch (Exeption $e) {//trocar a exeption pra pegar o erro certo!!
            echo "<h1>erro ao cadastrar dados!</h1><h2>O id já existe na base de dados!</h2>";
    }

    

    mysqli_close($conn);
?>