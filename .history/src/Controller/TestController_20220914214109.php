<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController
{
    public function index()
    {
        var_dump("ca fonctionne bien");
        die();
    }

    public function test(Request $request, $age)
    {
        // ajoute $age sur (Request $request, $age) et comment la ligne ci desu
        // $age = $request->attributes->get('age');
        return new Response("Vous avez $age ans!"); 

    }
}
