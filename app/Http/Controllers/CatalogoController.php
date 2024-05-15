<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;
use Illuminate\View\View;

class CatalogoController extends Controller
{
//-------------------------------index method-----------------------------------------------------
    public function index(): View
    {
        $name = "catalogo";

        $trigger = false;
        $categorias = true;
        $catalogo = Catalogo::simplePaginate(16);

        return view("catalogo.index", compact("name", "catalogo", 'trigger', "categorias"));
    }
//---------------------------------getProd method--------------------------------------------------
    public function getProd(Catalogo $txtId): View
    {

        $name = "catalogo";

        $trigger = true;

        return view("catalogo.index", compact('name', 'txtId', 'trigger'));
    }
//---------------------------------------------------------------------------------------------------
    public function search(Request $request)
    {
        $name = "catalogo";
        $trigger = false;
        $categorias = false;
        $search = $request->nombre;
        
        if($request->nombre !="")
        {
            $catalogo = Catalogo::where("nombre_prod", "LIKE", "%".$request->nombre."%")->simplePaginate(60);
        }else{
            $categorias = true;
            $catalogo = Catalogo::simplePaginate(16);
        }

        return View("catalogo.index", compact("catalogo", "trigger", "name", "categorias", "search"));
    }
}
//----------------------------------------------------------------------------------------------------