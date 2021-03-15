<?php

class Pinigine
{
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti($kiekis)
    {
        if ($kiekis <= 2 && $kiekis > 0) {
            $this->metaliniaiPinigai += $kiekis;
        }
        if ($kiekis > 2) {
            $this->popieriniaiPinigai += $kiekis;
        }       
    }

    public function skaiciuoti()
    {
        return print_r($this->metaliniaiPinigai + $this->popieriniaiPinigai);
    }

    public function monetos()
    {
        return print_r($this->metaliniaiPinigai);
    }

    public function banknotai()
    {
        return print_r($this->popieriniaiPinigai);
    }

}
