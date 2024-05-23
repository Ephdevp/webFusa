@extends('layouts.layout')

@section('main')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Catálogo</h2>
                    <ol>
                        <li><a href="../index.php">Inicio</a></li>
                        <li>Catalogo</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="section-title">

                    @if ($trigger == false)
                        <h2>Catálogo</h2>
                        <p>Explore nuestro catálogo para encontrar los productos de su interés. A manera de información como
                            cliente debe saber que para contratar nuestros servicios o realizar compras tanto en nuestros
                            puntos de venta como en nuestra tienda virtual es necesario que este acreditado mediante
                            contratación como cliente de nuestra empresa.</p>
                        <div class="row mt-2">
                            <div class="sidebar-item search-form">
                                <form method="POST" action="{{ route('catalogo.search') }}">
                                    @csrf
                                    <input type="text" name="nombre" value="{{isset($search)?$search:""}}" placeholder="Buscar...">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>
                            <!-- End search formn-->
                        </div>

                        {{-- @if ($categorias == true)
                            <div class="mt-4">
                                @include('catalogo._partials.categorias')

                                <nav class="navbar mb-2">
                                    <div class="container-fluid">
                                        <button class="btn rounded-pill mx-auto btn-orange" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            Categorias <i class="bi bi-caret-down"></i>
                                        </button>
                                    </div>
                                </nav>
                            </div>
                        @endif --}}
                    @endif
                </div>
                
                @if ($trigger == true)
                    <h2 class="text-center mb-4">{{ $txtId->nombre_prod }}</h2>
                    <div class="container text-center">
                        <div
                            class="col-lg-4 shadow rounded-3 col-md-6 portfolio-item portfolio-items filter-cat text-center mx-auto">
                            <img src="{{ asset('assets/img/catalogue/' . $txtId->imagen_url) }}" class="w-75 h-75 mt-4" 
                                alt="producto">
                        </div>
                        <div class="mt-3 col-lg-4 col-md-6 mx-auto">
                            <p class="h6 btn btn-light opacity-75 mb-2">{{ $txtId->descripcion }}</p><br>
                            <h6>Precio: <small class="text-success">{{ $txtId->precio_cup }} CUP</small></h6>
                            <h6>Precio: <small class="text-success">{{ $txtId->precio_usd }} USD</small></h6>
                            <a href="#"><i class="br bi-cart4" title="Este enlace lleva a la tienda virtual"></i>
                                comprar online</a><br>
                            <a href="{{ route('catalogo.index') }}"><i class="bi bi-arrow-left-short"></i>volver</a>
                        </div>
                    </div>
                @else
                    @foreach ($catalogo as $temp)
                        <div class="row portfolio-container mx-auto" data-aos="fade-up">
                            <div
                                class="col-lg-4 shadow rounded-3 col-md-6 portfolio-item portfolio-items filter-{{ $temp->categoria_prod }} text-center">
                                <img src="{{ asset('assets/img/catalogue/' . $temp->imagen_url) }}" class="w-75 h-75 mt-4"
                                    alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $temp->nombre_prod }} </h4>
                                    <a href="{{ route('catalogo.getProd', $temp->id) }}"
                                        class="h5 btn-light opacity-75">Ver detalles</a>
                                </div>
                            </div>
                    @endforeach
                @endif
            </div>
            </div>
            </div><!-- End blog entries list -->
            
            <!--paginate-->
            @isset($catalogo)
            <div class="text-center">
                {{$catalogo->links()}}
            </div>
            @endisset<!--end paginate-->

        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
@endsection
