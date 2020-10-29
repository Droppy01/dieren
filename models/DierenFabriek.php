<?php


namespace models;


class DierenFabriek
{
    public function maakDier($klassenaam):Dier
    {
        return new $klassenaam();
    }
}