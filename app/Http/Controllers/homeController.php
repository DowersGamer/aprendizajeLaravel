<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class homeController extends Controller
{
    public function __invoke(){
        return view('principal.home');
    }
}
