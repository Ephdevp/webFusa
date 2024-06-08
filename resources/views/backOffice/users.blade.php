@extends('backOffice.layouts.layout')
@section('title', 'User | Admin')

@section('main')
    <div class="container">
        <label class="form-label h5 text-decoration-underline">Tabla de usuarios</label>
        <div class="card">
            {{-- <div class="mt-2 me-2 text-end">
                <a class="btn btn-dark" href="{{ route('user.create') }}">Crear usuario</a>
            </div> --}}
            <div class="card-body">
                <div>
                    <table class="table table-striped text-center">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th></th>
                            </tr>
                        </thead>
                        @forelse ($usuarios as $temp)
                            <tbody>
                                <tr>
                                    <td>{{ $temp->name }}</td>
                                    <td>{{ $temp->categories }}</td>
                                    <td>
                                        {{-- <form method="POST" action="{{ route('back_office.destroyUser', $temp->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-light rounded-1" title="Eliminar">
                                                <i class="bi bi-trash3 text-danger"></i>
                                            </button>
                                        </form> --}}
                                        @if ($temp->password_define == true)
                                            <a href="{{route("back_office.restartPassword", $temp->id)}}" class="bg-light rounded-1 text-success" title="restaurar contraseña">
                                                <i class="bi bi-arrow-repeat"></i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        @empty
                            <h4 class="text-center text-danger mt-4">No hay datos registrados</h4>
                        @endforelse
                    </table>
                    <div class="text-end mb-4 mt-4">
                        {{ $usuarios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
