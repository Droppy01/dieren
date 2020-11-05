<<<<<<< HEAD
<?php


namespace views;

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
                            <div><input type="hidden" name="controller" value ="Bezoeker"/></div>
                            <div><input type="hidden" name="actie" value ="toon"/></div>
                            <div><input type="radio" name="dier" value="Koe"/><label>Koe</label></div>
                            <div><input type="radio" name="dier" value="Schaap"/><label>Schaap</label></div>
                            <div<input type="radio" name="dier" value="Geit"/><label>Geit</label>></div>
                            <div><input type="radio" name="dier" value="Paard"/><label>Paard</label></div>
                            <div><input type="submit" value="klikme"/></div>
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
                            <div><input type="hidden" name="controller" value ="Bezoeker"/></div>
                            <div><input type="hidden" name="actie" value ="toon"/></div>
                            <div><input type="radio" name="dier" value="Koe"/><label>Koe</label></div>
                            <div><input type="radio" name="dier" value="Schaap"/><label>Schaap</label></div>
                            <div<input type="radio" name="dier" value="Geit"/><label>Geit</label>></div>
                            <div><input type="radio" name="dier" value="Paard"/><label>Paard</label></div>
                            <div><input type="submit" value="klikme"/></div>
                        </form>
               </body>
        </html>
EOT;
    }
=======
<?php


namespace views;

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
                            <div><input type="radio" name="dier" value="Koe"/><label>Koe</label></div>
                            <div><input type="radio" name="dier" value="Schaap"/><label>Schaap</label></div>
                            <div<input type="radio" name="dier" value="Geit"/><label>Geit</label>></div>
                            <div><input type="radio" name="dier" value="Paard"/><label>Paard</label></div>
                            <div><input type="submit" value="klikme"/></div>
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
                            <div><input type="radio" name="dier" value="Koe"/><label>Koe</label></div>
                            <div><input type="radio" name="dier" value="Schaap"/><label>Schaap</label></div>
                            <div<input type="radio" name="dier" value="Geit"/><label>Geit</label>></div>
                            <div><input type="radio" name="dier" value="Paard"/><label>Paard</label></div>
                            <div><input type="submit" value="klikme"/></div>
                        </form>
               </body>
        </html>
EOT;
    }
>>>>>>> 92d599c727456676fc3b901183a739eca0ab4575
}