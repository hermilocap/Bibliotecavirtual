<?php    
if(isset($_POST['boton'])){
        $error = array(); // declaramos un array para almacenar los errores
        if($_POST['nombre'] == ''){
            $error[1] = '<span class="error">Ingrese su nombre</span>';
        }else if(strlen($_POST['nombre']) < 2){
            $error[1] = '<span class="error">Mínimo 2 carácteres para el nombre</span>';
        // }else if($_POST['asunto'] == ''){
        //     $error[3] = '<span class="error">Ingrese un asunto</span>';
        // }else if($_POST['mensaje'] == ''){
        //     $error[4] = '<span class="error">Ingrese un mensaje</span>';
        // }else if(strlen($_POST['mensaje']) < 20){
        //     $error[4] = '<span class="error">Mínimo 20 carácteres para el nombre</span>';
        }
    //si no existe la variable post boton, osea si se ha intentado acceder
    //directamente desde la url, se le devuelve a la página.
}else{
        header("Location:registrarlibro.php");
}    
?>