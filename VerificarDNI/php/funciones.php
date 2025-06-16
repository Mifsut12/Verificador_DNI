<!-- Fichero que contiene las funciones de php -->

<?php 



//Función dedicada a verificar que hay 8 numeros
function verificarNumeros($numeros){
    //Procediento, convertir a numero y verificar si se trata de numeros.
    
    
    if(is_int(intval($numeros))){
        return true;
    }else{
        return false;
    }
}

//Función dedicada a verificar si el caracter final es una letra.
function verificarLetra($letra,$letras){
    //Procedimiento, ver si $letra coincide con algun valor de la variable letras(Todos los posibles valores de la letra del DNI)

    

    if(array_search($letra,$letras,false)){
        return true;
    }else{
        return false;
    }
}


function verificarDNI($DNI,$letras){

    

    $numeros = substr($DNI,0,-1);

    $ultimoCaracter = substr($DNI,-1);

    //Verificar si el formato de lo introducido es correcto

    if(verificarNumeros($numeros) && verificarLetra($ultimoCaracter,$letras)){
        //Procedimiento para el calculo de la letra del DNI
        $letraVeridicada = $letras[intval($numeros)%23];
        if($letraVeridicada == $ultimoCaracter){
            echo "<p> El DNI $DNI es valido</p>";
        }else{
            echo "<p> El DNI $DNI no es valido</p>";
        }
    }else{
        echo "<p> El DNI introducido ($DNI)  no cumple con el formato de DNI</p>";
    }

    echo "<a href = /index.html> Volver atrás  </a>";
}

?>


