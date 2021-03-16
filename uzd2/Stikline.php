<?php

class Stikline
{
    private $turis;
    private $kiekis;

    public function __construct($turis) {
        $this->turis = $turis;
    }
    
    public function ipilti($kiekis)
    {
        if ($this->turis < $kiekis) {
            $kiekis = $this->turis;
        }
        return $this->kiekis += $kiekis;
    }

    public function ispilti()
    {
        $likutis = $this->kiekis;
        $this->kiekis = 0;
        return $likutis;
    }
            
}
