<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    public function index()
    {
        var_dump("ca fonctionne bien");
        die();
    }

    /**
     * Undocumented function
     *
     * @Route("/test/{age<\d+>?0}", name="test", methods={"GET", "POST"})  
     */
    public function test(Request $request, $age, Calculator $calculator)
    {

        $tva = $calculator->calcul(150);
        dump($tva);
        // ajoute $age sur (Request $request, $age) et comment la ligne ci desu
        // $age = $request->attributes->get('age');
        return new Response("Vous avez $age ans!"); 

    }
}
