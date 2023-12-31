<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use function Termwind\render;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function welcome()
    {
        return view('welcome');
    }
    public function test()
    {
        return view('test');
    }
}
