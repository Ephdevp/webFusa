<footer>
    {{-- <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script> --}}
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/sweetalert2/js/sweetalert2.all.min.js')}}"></script>
    @yield('scripts')
    {{-- <script>
        //alerta de borrado
        function borrar(id) {
            Swal.fire({
                title: '¿Desea borrar el registro?',
                showDenyButton: true,
                confirmButtonColor: '#198754',
                confirmButtonText: 'Si',
                denyButtonColor: '#000',
                denyButtonText: `No`,
            }).then((result) => {

                if (result.isConfirmed) {
                    window.location = "TafUSaw2hT_Kp01.php?txtId=" + id;
                } else if (result.isDenied) {}
            })
        }
    </script> --}}

        <!-- Toast script -->
        @if (session("create"))
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                var toastElList = [].slice.call(document.querySelectorAll('.create'))
                var toastList = toastElList.map(function (toastEl) {
                    return new bootstrap.Toast(toastEl)
                });
                toastList.forEach(toast => toast.show());
            });
        </script>
        @elseif(session("delete"))
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                var toastElList = [].slice.call(document.querySelectorAll('.delete'))
                var toastList = toastElList.map(function (toastEl) {
                    return new bootstrap.Toast(toastEl)
                });
                toastList.forEach(toast => toast.show());
            });
        </script>
    @endif
</footer>
</body>

</html>
