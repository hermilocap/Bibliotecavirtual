$(document).ready(function () {
    
    $(".boton").click(function (){
        $(".error").remove();
        if( $(".nombre").val() == "" ){
            $(".nombre").focus().after("<p class='error'>Ingrese su nombre</p>");
            return false;
        }
    });
});