<?php

namespace App\Http\Controllers;

use App\Service\Verify;

class TestController extends Controller
{
    public function __invoke()
    {
        $verify = new Verify();
        dd($verify->verifyICS("FR86JTT349220"));
    }
}
