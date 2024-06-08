    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row flex justify-content-between">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Emp. FUSA</h3>
                        <p>
                            Prolongación 48, %41<br>
                            y Río Almendares<br>
                            Playa, La Habana <br><br>
                            <strong>Telef:</strong> +53 7 2141668<br>
                            <strong>Email:</strong> direccion@ferreteria.ausa.cu<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Enlaces Utiles</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('view.index')}}">Inicio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('info.index')}}">Información Legal</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('catalogo.index')}}">Catálogo</a></li>
                        </ul>
                    </div>

                    <!--Client Form-->
                    <!--Buttom-->
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Envianos tu duda</h4>
                        <ul>
                            <li><button class="btn rounded-pill text-light" data-bs-toggle="modal"
                                    data-bs-target="#form"><i class="bi bi-envelope-arrow-up"></i> Redactar mensaje</button></li>
                        </ul>
                    </div>

                    @include('layouts._partials.attClientModal')

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright 2024 |<strong><span> Creado por | Equipo de infocomunicaciones de Ferreterías
                            Universales S.A.</span></strong>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="telegram"><i class="bx bxl-telegram"></i></a>
                <a href="#" class="telegram"><i class="bi bi-cart4"></i></a>
            </div>
        </div>

        @include('landing._partials.toatsSuccess')

        @include('landing._partials.toatsFailed')

    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <!-- Toast script -->
    @if (session("send"))
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                // Seleccionar solo el .toast con id myToast
                var toastEl = document.getElementById('success');
                if (toastEl) {
                    var myToast = new bootstrap.Toast(toastEl);
                    myToast.show();
                }
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                // Seleccionar solo el .toast con id myToast
                var toastEl = document.getElementById('failed');
                if (toastEl) {
                    var myToast = new bootstrap.Toast(toastEl);
                    myToast.show();
                }
            });
        </script>
    @endif
