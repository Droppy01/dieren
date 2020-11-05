
<?php
    spl_autoload_register("loadClass");

    function loadClass($class) {
    include str_replace("\\", "/", __NAMESPACE__ .$class.'.php') ;
    }

    if(isset($_REQUEST['controller'])) {
        //weer check user input!!!!
        $control = $_POST['controller'];
        $controllerFullName = "controls\\".$control."Controller";
        
    } else {

        $controllerFullName = "controls\\BezoekerController";

    }

    $controller = new $controllerFullName();

    $controller->voeruit();
