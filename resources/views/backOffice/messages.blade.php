@extends('backOffice.layouts.layout')

@section("title", "Menssage | Admin")

@section("main")
<div class="container w-75">
    <div class="dropdown mb-5 text-end">
        <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-eye"></i> Mostrar
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route("back_office.getMessage", "todos")}}">Todos</a></li>
            <li><a class="dropdown-item" href="{{route("back_office.getMessage", "no_leidos")}}">No leidos</a></li>
            <li><a class="dropdown-item" href="{{route("back_office.getMessage", "leidos")}}">Leidos</a></li>
        </ul>
    </div>

    <div class="row mt-2 mb-4">
        <div class="sidebar-item search-form">
            <form method="POST" action="{{ route('message.search') }}">
                @csrf
                <input type="text" name="mensaje" placeholder="Buscar..." value="{{isset($search)?$search:""}}">
                <button class="bg-dark rounded-1" type="submit"><i class="bi bi-search text-light"></i></button>
            </form>
        </div>
    </div>

</div>
<div class="container w-75">
    @forelse ($mensaje as $temp)
        <div class="row">
            <div class="col-11">
                <div class="accordion accordion-flush">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne{{$temp->id}}" aria-expanded="false" aria-controls="flush-collapseOne">
                                <small class="me-2">{{$temp->created_at->format("d-m-Y")." |"}}</small>
                                    @if($temp->leido == 0) 
                                        <i class="bi bi-envelope me-1 text-dark"> 
                                    @else
                                        <i class="bi bi-envelope-open me-1 text-success"></i>
                                    @endif
                                </i> Mensaje de <b class="ms-1">{{$temp->remitente}}</b>
                            </button>
                        </h2>
                        <div id="flush-collapseOne{{$temp->id}}" class="accordion-collapse collapse ms-3" data-bs-parent="#accordionFlushExample">
                            <div class="row">
                                <h6 class="mt-3"><i class="bi bi-telephone"></i> Teléfono:<small class="ms-2 text-decoration-underline">{{$temp->telefono}}</small></h6>
                                <h6><i class="bi bi-envelope-at"></i> Email:<small class="ms-2 text-decoration-underline">{{$temp->email}}</small></h6>
                                @if ($temp->leido == false)
                                    <a class="text-success text-decoration-none" href="{{route('message.update', $temp->id)}}"><i class="bi bi-check-lg"></i> Marcar cómo leido</a>
                                @endif
                            </div>
                            <div class="accordion-body border mt-3 mb-5">
                                <h5><i class="bi bi-envelope-paper"></i> Mensaje:</h5><p class="ms-2">{{$temp->mensaje}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if ($temp->leido == 1)
                <div class="col-1">
                    <form method="POST" action="{{route('message.delete', $temp->id)}}">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn mt-2" title="Eliminar"><i class="bi bi-trash3 text-danger"></i></button>
                    </form>
                </div>
            @endif
        </div>
    @empty
        <p class="text-danger text-center">El listado de mensajes está vacio</p>
    @endforelse

    <div class="text-center mb-4 mt-4">
        {{$mensaje->links()}}
    </div>

</div>
@endsection
