
                <?php
                    
                    spl_autoload_register("loadClass");

                    function loadClass($class)
                    {
                        include str_replace("\\", "/", __NAMESPACE__ .$class.'.php') ;
                    }
                     $view = new \views\DierenView();
                    if(!empty($_POST['dier'])) {
                        $bijdrage = $_POST['dier'];


                        $fabriek = new models\DierenFabriek();

                        // please validate user's input 
                        try {
                            switch ($bijdrage) {
                                case "Schaap" : 
                                    break;
                                case "Koe" : 
                                    break;
                                case "Geit" : 
                                    break;
                                case "Paard" : 
                                    break;
                                default:
                                throw new Exception("$bijdrage bestaat niet") ;
                                break;

                            }
                            $dier = $fabriek->maakDier($bijdrage);

                            // don't forget "$"
                            $view->toon($dier);
                        }
                        catch (Exception $error) {
                            $view->Error($error);
                        }
                        
                        
                    }
                    else{
                        $view->vraag();
                    }
