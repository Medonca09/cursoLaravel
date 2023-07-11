<?php

namespace App\Http\Controllers\Site;

use App\Curso;
use illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('home', compact('cursos'));
    }
}