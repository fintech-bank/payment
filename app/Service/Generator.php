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

    public function icsActivity()
    {
        $first = array_rand($this->alphabet_reverse(), 3);
        return implode('', $first);
    }

    public function icsNNE($icsKey, $activity, $country)
    {
        $nne = '';
        $uc_activity = '';
        $uc_country = '';

        foreach (Str::ucsplit($activity) as $char) {
            $uc_activity .= array_search($char, $this->alphabet());
        }

        foreach (Str::ucsplit($country) as $char) {
            $uc_country .= array_search($char, $this->alphabet());
        }

        return Str::limit($uc_activity, 3, '') . Str::limit($uc_country, 3, '');
    }

    public function generateICS()
    {
        $country = $this->countries();

        $c = array_rand($country);
        $key = $this->icsKey($c);
        $act = $this->icsActivity();
        $nne = $this->icsNNE($key, $act, $c);

        return $c.$key.$act.$nne;
    }
}
