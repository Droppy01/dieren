<<<<<<< HEAD
<?php


namespace controls;


use models\DierenFabriek;
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
        $bijdrage = $_POST['dier'];
        $dier = $this->fabriek->maakDier($bijdrage);
        $this->view->toon(dier);
    }

    public function voeruit():void{
        if(isset($_REQUEST['action']))
        {
            $taak = $_REQUEST['actie'];
            $opdracht = $taak."Action";
            $opdracht();
        }
        else{
            $this->vraagAction();
        }
    }
=======
<?php


namespace controls;


class BezoekerController
{

>>>>>>> 92d599c727456676fc3b901183a739eca0ab4575
}