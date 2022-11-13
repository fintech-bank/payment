<?php

namespace App\Service;

use Illuminate\Support\Str;

class Verify
{
    public function verifyICS($ics)
    {
        $length = Str::length($ics);
        $formater = [
            Str::substr($ics, 0, 2),
            Str::substr($ics, 2, 2),
            Str::substr($ics, 4, 7),
        ];

        return $formater;
    }
}
