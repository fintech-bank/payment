<?php

namespace App\Service;

use Illuminate\Support\Str;

class Generator extends Tables
{
    public function icsKey($country)
    {
        $alphabet = $this->alphabet();
        $numericLanguageCode = '';


        foreach (Str::ucsplit($country) as $char) {
            $numericLanguageCode .= array_search($char, $alphabet);
        }

        return Str::limit($numericLanguageCode, 2, '');
    }

    public function icsNNE($icsKey, $activity, $country)
    {
        return $icsKey.str_pad($activity, 10, '0', STR_PAD_LEFT);
    }
}
