<?php


namespace models;


class Koe extends ZichtbaarDier implements Dier
{




    public function __construct(){

    }


    public function maakGeluid(): string
    {
        return "Boehhhhhhhhh";
    }

    public function getNaam()
    {
        return $this->naam;
    }
}