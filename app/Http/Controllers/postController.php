<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        return "Aqui se mostrara el index";
    }

    public function vistaCreate(){
        return view('post.index');
    }

    public function renderizarPosts($id){
        return "Aqui se mostrara el formulario de creacion";
    }
}
