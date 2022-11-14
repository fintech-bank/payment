<?php

namespace App\Http\Controllers;

use App\Service\Generator;
use App\Service\Verify;

class TestController extends Controller
{
    public function __invoke()
    {
        $verify = new Verify();
        $gen = new Generator();
        dd($verify->verifyICS('CH38HMR810338'), $gen->generateICS());
    }
}
