<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<head>
    @include('layout.head')
</head>
<!-- End Head -->

<body>
    <!-- Main -->
    <main class="main-wrapper">
        <!-- Header section -->
        <div class="container-fluid bg-light sticky-top">
            @include('layout.menutwo')
        </div>
        <!-- End header section -->

        <!-- Content -->
            @yield('dyncontent')
        <!-- End Content -->

        <!-- Footer Section-->
        <footer class="bg-light py-4">
            @include('layout.footer')
        </footer>

        <!-- End Footer section -->
    </main>

    <!-- script -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- end script -->

</body>

</html>
