        <!-- ======= Our supplier Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Proveedores</h2>
                </div>

                <div class="slider mb-5">
                    <div class="slider-track">
                        <div class="slide mx-3 my-auto">
                        </div>

                        @for ($i = 1; $i <= 24; $i++)

                            @component('landing._components.proveedores')
                                @slot('urlImg', asset('assets/img/proveedores/logo' . $i . '.png'))
                                @slot('alt', 'logo' . $i)
                            @endcomponent

                        @endfor

                    </div>
                </div>
        </section><!--End Our supplier Section-->
