<?php

namespace App\Controllers;

class Proycontroller extends BaseController
{
    public function Aplicaciones()
    {
        return view('Aplicaciones'); 
    }

    public function Frame()
        {
        return view('Framework'); 
    }

    public function Creditos()
    {
    return view('Creditos'); 
}
}
