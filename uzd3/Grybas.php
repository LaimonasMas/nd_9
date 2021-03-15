<?php

class Grybas {
    private $valgomas;
    private $sukirmijes;
    private $svoris;

    public function __construct()
    {
        $this->valgomas = Helper::valgomas();
        $this->sukirmijes = Helper::sukirmijes();
        $this->svoris = Helper::svoris();
    }

    public function getSvoris() 
    {
        return $this->svoris;
    }




}