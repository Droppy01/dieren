<?php


namespace models;


abstract class ZichtbaarDier
{
    protected string $plaatje;

    public function getPlaatje()
    {
        return $this->plaatje;
    }

    public function setPlaatje(string $plaatje)
    {
        $this->plaatje = $plaatje;
    }

}