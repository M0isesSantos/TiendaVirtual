<?php

    class Views
    {
        function getView($controller, $view, $data="")
        {
            $controller = get_class($controller);
            if($controller == "Home"){
                
                $view = "Views/".$view.".php"; //se arma la ruta para encontrar la Vista
            }else{
                $view = "Views/".$controller."/".$view.".php";
            }
            require_once ($view);
        }
    }



?>