<?php


namespace views;

use Exception;
use models\Dier;


class DierenView
{
    public function toon( Dier $dier)
    {
        //HEREDOC
        echo <<<EOT
            <!doctype html>
                <html >
                    <body>
                        <p>{$dier->maakGeluid()}</p>
                        <form method='post'>
                        <input type="hidden" name="controller" value ="Bezoeker"/><br>
                        <input type="hidden" name="actie" value ="toon"/><br>
                        <input type="radio" name="dier" value="Koe"/><label>Koe</label><br>
                        <input type="radio" name="dier" value="Schaap"/><label>Schaap</label><br>
                        <input type="radio" name="dier" value="Geit"/><label>Geit</label><br>
                        <input type="radio" name="dier" value="Paard"/><label>Paard</label><br>
                        <input type="radio" name="dier" value="vos"/><label>vos</label><br>
                        <input type="submit" value="klikme"/>
                    </form>
                    </body>
                </html>
EOT;
    }

    public function vraag(){
        echo <<<EOT
            <!doctype html>
                <html >
                    <body>
                        <p>
                            welk dier wil je horen?
                        </p>
                        <form method='post'>
                        <input type="hidden" name="controller" value ="Bezoeker"/><br>
                        <input type="hidden" name="actie" value ="toon"/><br>
                        <input type="radio" name="dier" value="Koe"/><label>Koe</label><br>
                        <input type="radio" name="dier" value="Schaap"/><label>Schaap</label><br>
                        <input type="radio" name="dier" value="Geit"/><label>Geit</label><br>
                        <input type="radio" name="dier" value="Paard"/><label>Paard</label><br>
                        <input type="radio" name="dier" value="vos"/><label>vos</label><br>
                        <input type="submit" value="klikme"/>
                    </form>
               </body>
        </html>
EOT;
    }
    public function Error(Exception $error){
        http_response_code(500);
        echo <<<EQT
            <!doctype html>
            <html>
                <body>
                    <h1>An ERROR has occurred</h1>
                    <p> at {$error->getFile() }:{$error->getLine()}</p>
                    <p> error Message: {$error->getMessage()} </p>
                    <a href="."> retry </a>
                </body>
            </html>
        EQT;
    }
}