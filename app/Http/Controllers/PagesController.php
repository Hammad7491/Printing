<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{



  




public function indexes()
{
    return view('indexes');
}


public function villa()
{
    return view('villa');
}


public function neon()
{
    return view('neon');
}


public function name()
{
    return view('name');
}

public function label()
{
    return view('label');
}


public function print()
{
    return view('print');
}


public function ballon()
{
    return view('ballon');
}



public function flag()
{
    return view('flag');
}


public function stand()
{
    return view('stand');
}


public function fashion()
{
    return view('fashion');
}

}
