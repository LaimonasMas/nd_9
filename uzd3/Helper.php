<?php

class Helper {

    public static function valgomas()
    {
        $number = rand(1, 100);
        if($number < 50) {
            return true;
        } else {
            return false;
        }
    }

    public static function sukirmijes() {
        $number = rand(1, 100);
        if($number < 50) {
            return true;
        } else {
            return false;
        }
    }

    public static function svoris() {
        return rand(5, 45);
    }

}