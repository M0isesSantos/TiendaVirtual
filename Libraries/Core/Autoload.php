<?php
    //funcion autoload
    spl_autoload_register(function($class){
        //echo LIBS.'Core/'.$class.".php";
        //Libraries/Core/home.php -- Valida si existe ese archivo
        if(file_exists("Libraries/".'Core/'.$class.".php")){
            require_once("Libraries/".'Core/'.$class.".php");
        }
    });
?>

