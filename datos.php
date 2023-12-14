<?php

include('con_db.php');

$consut = $conexion->query("SELECT * FROM us");

while ($data = $consut->fetch_assoc()) { 
    ?> <h3><?php echo 'USUARIO: '.$data['user'].' CLAVE: '.$data['pass']?></h3><?php
}

?>