<?php

namespace App\Service;

use Illuminate\Support\Str;

class Verify
{
    public function verifyICS($ics)
    {
        $length = Str::length($ics);
        $formater = [
            Str::substr($ics, 0, 2)
        ];

        return $formater;
    }
}
