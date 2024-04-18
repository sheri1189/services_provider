<?php

namespace App\Http\Controllers;

use App\Service\AwesomeServiceInterface;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function doAwesome(AwesomeServiceInterface $awesome_service)
    {
        $awesome_service->doSomething();
    }
}
