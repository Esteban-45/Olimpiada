<?php 
    include("conexion.php");
    $distancia = $_GET["dis"];
    
    actualizar($distancia);


    function actualizar($dis){
        $db = new ConexionDB;
        $conexion = $db ->retornar_conexion();
        $sql = "UPDATE `sensores` SET `distancia`=$dis WHERE `sensor_id`=6";

        $instancia = $conexion ->prepare($sql); 
    
        if (!$instancia) {
            echo "Error al crar el registro";
        }else{
            $instancia ->execute();
            echo "Listo";
        }
    
        $instancia = $db ->cerrar_conexion($conexion);
    }
?>
