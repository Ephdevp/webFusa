<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\Catalogo;
use App\Models\Mensaje;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class BackOfficeController extends Controller
{
//==================================Login================================
    public function index(): View
    {
        return view("backOffice.index");
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        if(!Auth::attempt(['name' => $request->name, 'password' => $request->password]))
        {
            return redirect()->route("back_office.index")->with("error", "Usuario o contraseña incorrectos");
        }
        return redirect()->route("back_office.getMessage")->with("success", "Sesion iniciada con exito");
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("back_office.index");    
    }
//==================================End Login================================

//==================================Catalogue================================
    public function getCatalogue(): View
    {
        $catalogo = Catalogo::simplePaginate(20);

        return view("backOffice.catalogue", compact("catalogo"));
    }

//------------------------------------------------------------------------
    public function createCatalogue(Request $request): RedirectResponse
    {
        $fileName = time().".".$request->imagen_url->extension();
        $request->imagen_url->move(public_path("assets/img/catalogue"), $fileName);

        Catalogo::create([ 
            //"categoria_prod" => $request->categoria_prod,
            "nombre_prod" => $request->nombre_prod,
            "precio_cup" => $request->precio_cup,
            "precio_usd" => $request->precio_usd,
            "descripcion" => $request->descripcion,
            "imagen_url" => $fileName
        ]);

        session()->flash("create");

        return redirect()->route("back_office.getCatalogue");
    }

//------------------------------------------------------------------------
    public function editCatalogue(Catalogo $id): View
    {
        return View("backOffice.catalogueEdit", compact("id"));
    }

//------------------------------------------------------------------------
    public function updateCatalogue(Request $request, Catalogo $id): RedirectResponse
    {
        if ($request->imagen_url != "")
        {
            $file = public_path("assets/img/catalogue/".$id->imagen_url);
            if (File::exists($file))
            {
                File::delete($file);
            }
            $fileName = time().".".$request->imagen_url->extension();
            $request->imagen_url->move(public_path("assets/img/catalogue"), $fileName);
            $id->update([
                //"categoria_prod" => $request->categoria_prod,
                "nombre_prod" => $request->nombre_prod,
                "precio_cup" => $request->precio_cup,
                "precio_usd" => $request->precio_usd,
                "descripcion" => $request->descripcion,
                "imagen_url" => $fileName
            ]);
        }else{
            $id->update([
                //"categoria_prod" => $request->categoria_prod,
                "nombre_prod" => $request->nombre_prod,
                "precio_cup" => $request->precio_cup,
                "precio_usd" => $request->precio_usd,
                "descripcion" => $request->descripcion
            ]);
        }

        return redirect()->route('back_office.getCatalogue');
    }

//------------------------------------------------------------------------
    public function destroyCatalogue(Catalogo $id): RedirectResponse
    {   
        $file = public_path("assets/img/catalogue/".$id->imagen_url);
        if (File::exists($file))
        {
            File::delete($file);
        }

        $id->delete();
        session()->flash("delete");

        return redirect()->route("back_office.getCatalogue");
    }

//------------------------------------------------------------------------
    public function searchCatalogue(Request $request): View
    {
        $search = $request->nombre;
        $catalogo = Catalogo::where("nombre_prod", "LIKE", "%".$request->nombre."%")->simplePaginate(20);

        return view("backOffice.catalogue", compact("catalogo", "search"));
    }
//================================End Catalogue==================================


//================================Message===================================
    public function getMessage(string $mostrar = "no_leidos"): View
    {
        switch ($mostrar) {
            case "todos":
                $mensaje = Mensaje::orderBy("id", "desc")->simplePaginate(10);
                break;

            case "no_leidos":
                $mensaje = Mensaje::where("leido", "=", false)->orderBy("id", "desc")->simplePaginate(10);
                break;

            case "leidos":
                $mensaje = Mensaje::where("leido", "=", true)->orderBy("id", "desc")->simplePaginate(10);
                break;
        }

        return view("backOffice.messages", compact("mensaje"));
    }

//------------------------------------------------------------------------
    public function update(string $txtId): RedirectResponse
    {
        Mensaje::where("id", "=", $txtId)->update(["leido" => true]);


        return redirect()->route("back_office.getMessage");
    }

//------------------------------------------------------------------------
    public function destroy(Mensaje $id): RedirectResponse
    {
        $id->delete();

        return redirect()->route("back_office.getMessage", $mostrar = "leidos");
    }

//------------------------------------------------------------------------
    public function search(Request $request): View
    {
        $search = $request->mensaje;
        $mensaje = Mensaje::where("remitente", "LIKE", "%".$request->mensaje."%")->
        orWhere("telefono", "LIKE", "%".$request->mensaje."%")->
        orWhere("email", "LIKE", "%".$request->mensaje."%")->simplePaginate(10);

        return view("backOffice.messages", compact("mensaje", "search"));
    }
//================================End Message================================


//=================================Users==================================
    public function getUser(): View
    {
        $usuarios = User::simplePaginate(3);

        return view("backOffice.users", compact("usuarios"));
    }

//------------------------------------------------------------------------

    public function destroyUser(User $id):RedirectResponse
    {   
        $id->delete();
        return redirect()->route("back_office.getUsers");
    }

//==============================End Users==================================

}
