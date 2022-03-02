<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tabla1Controller extends Controller
{
    protected $resource = 'tabla1';
    public function index(){
        return view("$this->resource.index");
    }
}
