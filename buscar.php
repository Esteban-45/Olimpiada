<?php 
include('conexion.php');

buscar();

function buscar(){
    $db = new ConexionDB;
    $conexion = $db ->retornar_conexion();
    $sql = "SELECT distancia FROM sensores where sensor_id = 6;
    ";


    $instancia = $conexion ->prepare($sql); 

    if (!$instancia) {
        echo "Error al crear el registro";
    }else{
        $instancia ->execute();
    }

    while ($resultado = $instancia->fetch(PDO::FETCH_ASSOC)) {
        $result = $resultado['distancia'];
    }

    echo $result;

    $instancia = $db ->cerrar_conexion($conexion);
    
}


?>