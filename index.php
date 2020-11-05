
                <?php
                    spl_autoload_register("loadClass");

                    function loadClass($class)
                    {
                        include __NAMESPACE__ .$class.'.php';
                    }
<<<<<<< HEAD

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
=======
                     $view = new \views\DierenView();
                    if(!empty($_POST['dier'])) {
                        $bijdrage = $_POST['dier'];


                        $fabriek = new models\DierenFabriek();
                        $dier = $fabriek->maakDier($bijdrage);
                        $view->toon(dier);
                    }
                    else{
                        $view->vraag();
                    }
>>>>>>> 92d599c727456676fc3b901183a739eca0ab4575
