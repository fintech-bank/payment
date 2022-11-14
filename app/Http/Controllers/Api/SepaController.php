<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service\Verify;
use Faker\Factory;
use Illuminate\Http\Request;

class SepaController extends Controller
{
    public function accept(Request $request)
    {
        $faker = Factory::create('fr_FR');
        return $faker->boolean(rand(50,99));
    }

    public function remb(Request $request)
    {
        $verify = new Verify();
        return $verify->verifyICS($request->get('ics'));
    }
}
