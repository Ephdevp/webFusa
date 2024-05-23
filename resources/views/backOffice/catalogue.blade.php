@extends('backOffice.layouts.layout')
@section("title", "Catalogue | Admin")

@section("main")
    <div class="container mb-2">
        <a href="{{route("catalogue.create")}}" class="btn btn-dark">Nuevo producto</a>
        <div class="row mt-2">
            <div class="sidebar-item search-form text-center">
                <form method="POST" action="{{route("backOffice.searchCatalogue")}}">
                    @csrf
                    <input type="text" name="nombre" value="{{isset($search)?$search:""}}" placeholder="Buscar...">
                    <button class="btn btn-dark mb-1" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
            <!-- End search formn-->
        </div>
    </div>
    <div class="container">
        <div class="row">
            @forelse ( $catalogo as $temp )
                <div class="card col-3 me-3 mt-3" style="width: 15rem; height:auto;">
                    <img src="{{asset("assets/img/catalogue/".$temp->imagen_url)}}" class="card-img-top mt-2 mx-auto" style="width: 12rem; height:12rem;" alt="{{$temp->nombre_prod}}">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{$temp->nombre_prod}}</h5>
                        <div class="row">
                            <a href="{{route('back_office.editCatalogue', $temp->id)}}" class="text-decoration-none col-6 my-auto text-center">Editar</a>
                            <div class="col-6">
                                <form action="{{route("back_office.destroyCatalogue", $temp->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-trasparent mt-3 text-danger text-star" title="Eliminar">Eliminar</i></button>                            
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-danger">No hay registros para mostrar</p>
            @endforelse
        </div>
    </div>
    <div class="text-center mb-4">
        {{$catalogo->links()}}
    </div>
@endsection

@include('backOffice._partials.confirmDelete')

