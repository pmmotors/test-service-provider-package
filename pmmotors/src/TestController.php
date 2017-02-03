<?php

namespace Pmmotors\Pmtest;
use App\Http\Controllers\Controller;

class TestController extends Controller
{

    public function index($text)
    {
        return view('pmtest::test', compact('text'));
    }

}
