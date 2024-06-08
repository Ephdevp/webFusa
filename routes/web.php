<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BackOfficeController;


Route::get("/", function(){return redirect()->route("view.index");});


//=========================================Landing Controller===================================================//

//----------------------------------------index route-----------------------------------------------------------
Route::get('/landing', [LandingController::class, "index"])->name("view.index");

//----------------------------------------message route---------------------------------------------------------
Route::post('/message', [LandingController::class, 'message'])->name('message');



//=========================================End Landing Controller===============================================//




//=========================================Catalogue Controller==================================================//

Route::controller(CatalogoController::class)->group(function()
{
    Route::get('catalogo', "index")->name('catalogo.index');
    Route::get('catalogo/{txtId}', 'getProd')->name('catalogo.getProd');
    Route::post("catalogo", "search")->name("catalogo.search");
});

//=========================================End Catalogue Controller===============================================//




//=========================================Info Controller========================================================//

Route::get('Info', [InfoController::class, "index"])->name('info.index');

//=========================================End Info Controller====================================================//




//=========================================Back office Controller=================================================//

//---------------------------------------------/login/-------------------------------------------------------------
Route::get("backOffice", [BackOfficeController::class, "index"])->name("back_office.index");
Route::post("backOffice", [BackOfficeController::class, "login"])->name("backOffice.login");
Route::get("backOffice/logout", [BackOfficeController::class, "logout"])->name("logout");
//-------------------------------------------/End login/-----------------------------------------------------------

//-----------------------------------------/Group/-----------------------------------------------------------------
Route::middleware(['loginAuth', 'checkStatus'])->controller(BackOfficeController::class)->group(function(){

//-----------------------------------back office catalogue route---------------------------------------------------
Route::view("backOffice/catalogue/create", "backOffice.catalogueCreate")->name("catalogue.create");
Route::get("backOffice/catalogue", "getCatalogue")->name("back_office.getCatalogue");
Route::post("backOffice/catalogue/create", "createCatalogue")->name("back_office.createCatalogue");
Route::get("backOffice/catalogue/{id}", "editCatalogue")->name("back_office.editCatalogue");
Route::put("backOffice/catalogue/{id}", "updateCatalogue")->name("back_office.updateCatalogue");
Route::delete("backOffice/catalogue/{id}", "destroyCatalogue")->name("back_office.destroyCatalogue");
Route::post("backOffice/catalogue", "searchCatalogue")->name("backOffice.searchCatalogue");

//-----------------------------------back office messages route----------------------------------------------------
Route::get("backOffice/messages/{mostrar?}", "getMessage")->name("back_office.getMessage");
Route::get("backOffice/messages/read/{txtId}", "update")->name("message.update");
Route::delete("backOffice/messages/delete/{id}", "destroy")->name('message.delete');
Route::post("backOffice/messages", "search")->name("message.search");

//-----------------------------------back office users route--------------------------------------------------------
Route::get("backOffice/resetPassword", "resetPassword")->withoutMiddleware('checkStatus')->name("back_office.resetPassword");
Route::post("backOffice/reset", "userResetPassword")->withoutMiddleware('checkStatus')->name("back_office.userResetPassword");
Route::get("backOffice/users/{id}", 'restartPassword')->middleware('checkStatus')->name('back_office.restartPassword');
Route::get("backOffice/users", "getUser")->middleware('checkRol')->name("back_office.getUsers");
Route::delete("backOffice/users/{id}", "destroyUser")->middleware('checkRol')->name("back_office.destroyUser");
Route::view("backOffice/users/create", "backOffice.usersCreate")->middleware('checkRol')->name("user.create");
Route::put("backOffice/users/{id}", "updateUser")->middleware('checkRol')->name("back_office.updateUser");

//-----------------------------------------/End Group/---------------------------------------------------------------

//=========================================End Back office Controller==============================================//
});