<?php

class Helper {

    public static function valgomas()
    {
        $number = rand(0, 1);
        if($number == 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function sukirmijes() {
        $number = rand(0, 1);
        if($number == 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function svoris() {
        return rand(5, 45);
    }

}