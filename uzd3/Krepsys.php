<?php

class Krepsys {
    private $svoris = 0;

    public function __construct($svoris)
    {
        $this->svoris += $svoris;
    }

    public function bendrasSvoris()
    {
        return $this->svoris;
    }

    public function pridetiGrybu($svoris)
    {
        $this->svoris += $svoris;
    }


}