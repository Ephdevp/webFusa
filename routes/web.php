<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BackOfficeController;


Route::get("/", function(){return redirect()->route("view.index");});



//////////////////////////////////////////Landing Controller///////////////////////////////////////////////////////

//----------------------------------------index route--------------------------------------------------------------
Route::get('/landing', [LandingController::class, "index"])->name("view.index");

//----------------------------------------message route------------------------------------------------------------
Route::post('/', [LandingController::class, 'message'])->name('message');

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//////////////////////////////////////////Catalogue Controller///////////////////////////////////////////////////////

Route::controller(CatalogoController::class)->group(function()
{
    Route::get('catalogo', "index")->name('catalogo.index');
    Route::get('catalogo/{txtId}', 'getProd')->name('catalogo.getProd');
    Route::post("catalogo", "search")->name("catalogo.search");
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




/////////////////////////////////////////////////Info Controller///////////////////////////////////////////////////////

Route::get('Info', [InfoController::class, "index"])->name('info.index');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




////////////////////////////////////////////Back office Controller//////////////////////////////////////////////////////
Route::controller(BackOfficeController::class)->group(function(){
//---------------------------------------------login------------------------------------------------------------
Route::get("backOffice", [BackOfficeController::class, "login"])->name("back_office.login");

//-----------------------------------back office catalogue route------------------------------------------------
Route::view("backOffice/catalogue/create", "backOffice.catalogueCreate")->name("catalogue.create");
Route::get("backOffice/catalogue", "getCatalogue")->name("back_office.getCatalogue");
Route::post("backOffice/catalogue/create", "createCatalogue")->name("back_office.createCatalogue");
Route::get("backOffice/catalogue/{id}", "editCatalogue")->name("back_office.editCatalogue");
Route::put("backOffice/catalogue/{id}", "updateCatalogue")->name("back_office.updateCatalogue");
Route::delete("backOffice/catalogue/{id}", "destroyCatalogue")->name("back_office.destroyCatalogue");
Route::post("backOffice/catalogue", "searchCatalogue")->name("backOffice.searchCatalogue");

//-----------------------------------back office messages route-------------------------------------------------
Route::get("backOffice/messages/{mostrar?}", "getMessage")->name("back_office.getMessage");
Route::get("backOffice/messages/read/{txtId}", "update")->name("message.update");
Route::delete("backOffice/messages/delete/{id}", "destroy")->name('message.delete');
Route::post("backOffice/messages", "search")->name("message.search");

//-----------------------------------back office users route----------------------------------------------------
Route::get("backOffice/users", "getUser")->name("back_office.getUsers");

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
});