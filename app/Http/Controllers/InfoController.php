<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class InfoController extends Controller
{
    public function index(): View
    {
        $name = "info";
        return view("info.index", compact('name'));
    }
}
