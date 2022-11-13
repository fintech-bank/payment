<?php

namespace App\Service;

use Illuminate\Support\Str;

class Verify
{
    public function verifyICS($ics)
    {
        $length = Str::length($ics);
        $formater = Str::replace("\r\n", " ", chunk_split($ics, 2));

        return $formater;
    }
}
