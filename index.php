
                <?php
                    spl_autoload_register("loadClass");

                    function loadClass($class)
                    {
                        include __NAMESPACE__ .$class.'.php';
                    }
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
