<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensaje;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\MessageRequest;

class LandingController extends Controller
{
//------------------------------------------------------------------------
    public function index(): View
    {
        $cont = 1;

        $lineProdName = array('Ferretería general y accesorios', 'Medios de protección, seguridad y accesorios', 
        'Sistemas eléctricos, de iluminación y accesorios', 'Pinturas, barnices, diluentes y accesorios', 
        'Sistema de estantería metálica y accesorios', 'Sistemas ligeros de construcción y accesorios', 
        'Materiales para la construcción, impermeabilizantes y accesorios', 'Sistemas hidráulicos, sanitarios, de fluido industrial y accesorios', 
        'Cerrajería y accesorios', 'Sistemas de cubiertas y accesorios', 
        'Sistemas de clima, refrigeración y accesorios', 'Materiales para artesanos', 'Material de oficina', 'Energias renobables');

        return view('landing.index', compact('lineProdName', 'cont'));
    }

//------------------------------------------------------------------------
    public function message(MessageRequest $request): RedirectResponse
    {
        $check = ($request->check == "1")? true: false;
            Mensaje::create([
                "remitente" => $request->remitente,
                "email" => $request->email,
                "telefono" => $request->telefono,
                "mensaje" => $request->mensaje,
                "check" => $check,
                "leido" => false
            ]);
            session()->flash("send");
            
            return redirect()->route("view.index");
    }
//------------------------------------------------------------------------
}
