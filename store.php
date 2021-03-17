<?php

include('conexion.php');

//Validar recepción de datos
if (!empty($_POST['tarea'])) {

    //Recibir datos
    $tarea = $_POST['tarea'];
    $descripcion = $_POST['descripcion'];
    $prioridad = $_POST['prioridad'];
    $urgente = $_POST['urgente'];
    $tipo = $_POST['tipo'];

    //Validar datos

    //Guardar a la DB
    $sql = "INSERT INTO tareas (tarea, descripcion, prioridad, urgente, tipo) VALUES ('$tarea', '$descripcion', '$prioridad', '$urgente', '$tipo')";

    // use exec() because no results are returned
    $conn->exec($sql);

    //Redireccionar
    header('Location: index.php');

} else {
    echo "No hay datos enviados";
}



?>