
                <?php
                    spl_autoload_register("loadClass");

                    function loadClass($class)
                    {
                        include __NAMESPACE__ .$class.'.php';
                    }

                    if(isset($_REQUEST['controller']))
                    {
                        $control = $_POST['controller'];
                        $controllerFullName = "controls\\".$control."Controller";
                    }
                    else {
                        $controllerFullName = "controls\\BezoekerController";
                    }

                    $controller = new $controllerFullName();

                    $controller->voeruit();
