<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = [
            ['title' => 'Proyectos #1'],
            ['title' => 'Proyectos #2'],
            ['title' => 'Proyectos #3'],
            ['title' => 'Proyectos #4'],
        ];
        return view('portfolio', compact('portfolio'));
    }
}
