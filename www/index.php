<?php

$host = 'db';
$user = 'user';
$password = 'pass';
$db = 'examen';

$conn = new mysqli($host, $user, $password, $db);
$query = "SELECT * FROM examen";
$data = mysqli_query($conn, $query);


    echo '<h1>EXAMEN ALEJANDRO</h1>';
    echo '<hr>';

    if (mysqli_num_rows($data) > 0) {
        while($fila = mysqli_fetch_assoc($data)){
            echo 'Nombre: ';
            echo $fila["Nombre"];
            echo ' - id: ';
            echo $fila["id"];
            
           
        }   
    } else {
        die("Error: No hay datos en la tabla seleccionada");
    }
    
    mysqli_close($conn);
