<?php


namespace models;


class Schaap extends ZichtbaarDier implements Dier
{

    public function maakGeluid(): string
    {
        return "BAAAAAAAHHHHHH";
    }
}