<?php


namespace models;


class DierenFabriek
{
    public function maakDier(string $naam):Dier
    {
        $klassenaam = "models\\".$naam;
        return new $klassenaam();
    }
}