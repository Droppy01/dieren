<?php


namespace models;


class Paard extends ZichtbaarDier implements Dier
{

    public function maakGeluid(): string
    {
        return "HINNNNNIIIKK";
    }
}