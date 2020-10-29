<?php

    spl_autoload_register("loadClass");

    function loadClass($class)
    {
        include __NAMESPACE__ .$class.'.php';
    }

    if(isset($_POST['dier'])){
        $bijdrage = $_POST['dier'];
        $klassenaam = "models\\".$bijdrage;

        $fabriek = new models\DierenFabriek();

        $dier = $fabriek->maakDier($klassenaam);
        echo $dier->maakGeluid();
    }

    ?>
<!doctype html>
    <html>
        <body>
            <form method="post">
                <input type="text" name="dier"/>
                <input type="submit" value="klikme"/>
            </form>
        </body>
    </html>
