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
        $nne = '';
        $uc_activity = '';
        $uc_country = '';

        foreach (Str::ucsplit($activity) as $char) {
            $uc_activity .= array_search($char, $this->alphabet_reverse());
        }

        foreach (Str::ucsplit($country) as $char) {
            $uc_country .= array_search($char, $this->alphabet());
        }

        dd($uc_country, $uc_activity);
    }
}
