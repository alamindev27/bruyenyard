<!-- Vendor -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script src="{{ asset('assets/backend/') }}/vendor/jquery/jquery.js"></script>
<script src="{{ asset('assets/backend/') }}/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="{{ asset('assets/backend/') }}/vendor/popper/umd/popper.min.js"></script>
<script src="{{ asset('assets/backend/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/backend/') }}/vendor/nanoscroller/nanoscroller.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="{{ asset('assets/backend/') }}/js/theme.js"></script>
<!-- Theme Custom -->
<script src="{{ asset('assets/backend/') }}/js/custom.js"></script>
<!-- Theme Initialization Files -->
<script src="{{ asset('assets/backend/') }}/js/theme.init.js"></script>
<!-- Examples -->
<script src="{{ asset('assets/backend/') }}/js/examples/examples.dashboard.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('success'))
    <script>
        swal({
            title: "Success",
            text: "{{ session('success') }}",
            icon: "success",
            button: "Ok",
        });
    </script>
@endif
@yield('scripts')
