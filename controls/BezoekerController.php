<?php


namespace controls;


use models\DierenFabriek;
use Exception;
use views\DierenView;

class BezoekerController
{
    private DierenView $view;
    private DierenFabriek $fabriek;

    public function __construct(){
        $this->view = new DierenView();
        $this->fabriek = new DierenFabriek();
    }

    public function vraagAction():void
    {
        $this->view->vraag();
    }

    public function toonAction():void
    {
        //please validate user's input

        try {
            $bijdrage = $_POST['dier'];

        
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
                    throw new Exception("\"$bijdrage\" bestaat niet") ;
                    break;
            }
            $dier = $this->fabriek->maakDier($bijdrage);
            $this->view->toon($dier);
        } catch (Exception $error) {
            $this->view->Error($error);
        }

        
        
    }

    public function voeruit():void{
        if(isset($_REQUEST['actie'])) // action woord nooit aangemaakt
        {
            // ik zou dit niet doen. te gevaarlijk
            //$taak = $_REQUEST['actie'];
            //$opdracht = $taak."Action";
            //$opdracht();

            $taak = $_REQUEST['actie'];
            switch ($taak) {
                case "toon" :
                    $this->toonAction();
                break;
                default : //vraag
                    $this->vraagAction();
                break;
            }
        }
        else{
            $this->vraagAction();
        }
    }
}