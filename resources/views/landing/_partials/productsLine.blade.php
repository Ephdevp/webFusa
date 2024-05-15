        <!-- ======= products Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="section-title">
                    <h2>Linea de Productos</h2>
                    <h3 class="h6">Descubre todo lo que necesitas para hacer realidad tus proyectos y llevar tu negocio al siguiente nivel en nuestros puntos de venta. Con un <a style="text-decoration: underline" href="{{ route('catalogo.index') }}">catálogo</a>
                    diverso de productos a tu disposición, también te ofrecemos la comodidad de comprar desde nuestra <a style="text-decoration: underline" href="#">tienda virtual</a>. ¡Con nosotros, el éxito está a solo un clic de distancia!</h3>
                </div>

                <div class="row portfolio-container" data-aos="fade-up">
                    @foreach ($lineProdName as $temp)
                        @component('landing._components.productsLineComponent')
                            @slot('urlImg', asset('assets/img/portfolio/' . $cont++ . '.png'))
                            @slot('alt', $temp)
                            @slot('name', $temp)
                        @endcomponent
                    @endforeach

                </div>

            </div>
        </section><!-- End products Section -->
