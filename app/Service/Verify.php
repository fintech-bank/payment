<?php

namespace App\Service;

use Illuminate\Support\Str;

class Verify extends Tables
{
    private $generator;

    public function __construct()
    {
        $this->generator = new Generator();
    }

    public function verifyICS($ics)
    {
        $length = Str::length($ics);
        $i = 0;
        $formater = [
            "country" => Str::substr($ics, 0, 2),
            "key" => Str::substr($ics, 2, 2),
            "activity" => Str::substr($ics, 4, 3),
            "nne" => Str::substr($ics, 7, 6),
        ];

        // Vérification de la longeur
        if($length == 13) {
            $i++;
        } else {
            $i--;
        }

        // Vérification du pays

        if(array_key_exists($formater['country'], $this->countries())) {
            $i++;
        } else {
            $i--;
        }



        //dd($formater['country'], $this->countries());

        return array_key_exists($formater['country'], $this->countries());
    }
}
