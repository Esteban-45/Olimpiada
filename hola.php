<?php 
    include("conexion.php");
    $distancia = $_POST["dis"];
    
    actualizar($distancia);


    function actualizar($dis){
        $db = new ConexionDB;
        $conexion = $db ->retornar_conexion();
        $sql = "UPDATE `sensores` SET `distancia`=$dis WHERE `sensor_id`=6";

        $instancia = $conexion ->prepare($sql); 
    
        if (!$instancia) {
            echo "Error al crear el registro";
        }else{
            $instancia ->execute();
        }
    
        $instancia = $db ->cerrar_conexion($conexion);
    }
?>
