<!-- ======= hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            @component('landing._components.slider')
                @slot('class', 'carousel-item active')
                @slot('urlImg', asset('assets/img/slide/slide-1.jpg'))
                @slot('title', 'Ferreterias Universales S.A.')
                @slot('body', 'Impulsando el comercio mayorista en todo el país, somos una de las empresas líderes en el mercado. Nuestra presencia se extiende a lo largo y ancho del territorio nacional, garantizando productos de alta calidad y una variedad inigualable. ¡Con nosotros, la excelencia está siempre al alcance de tu mano!')
                @slot('link', '#about-us')
            @endcomponent

            <!-- Slide 2 -->
            @component('landing._components.slider')
                @slot('class', 'carousel-item')
                @slot('urlImg', asset('assets/img/slide/slide-2.jpg'))
                @slot('title', 'Un abanico de servicios integrales')
                @slot('body', 'Como tu opeardor logístico de confianza, ofrecemos una gama integral de servicios especializados. No solo cumplimos con nuestra misión, sino que también nos esforzamos por superar las expectativas de nuestros clientes. ¡Con nosotros, la satisfacción y eficiencia están garantizadas!')
                @slot('link', '#services')
            @endcomponent

            <!-- Slide 3 -->
            @component('landing._components.slider')
                @slot('class', 'carousel-item')
                @slot('urlImg', asset('assets/img/slide/slide-3.jpg'))
                @slot('title', 'Un extenso catálogo de productos')
                @slot('body', 'Con una variedad inigualable y una atención al cliente personalizada, estamos preparados para satisfacer tus necesidades de manera eficiente. Nuestros puntos de venta, repartidos por todo el país, cuentan con más de una década de experiencia en el sector mayorista. ¡Elige la excelencia, elige nuestra experiencia!')
                @slot('link', route('catalogo.index'))
            @endcomponent

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
</section><!-- End hero -->
