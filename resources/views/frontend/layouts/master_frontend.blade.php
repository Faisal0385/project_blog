<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Blog Website Design Tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    @yield('css')

</head>

<body>

    <!-- header section starts  -->
    @include('frontend.layouts.navbar')
    <!-- header section ends  -->

    <!-- main section starts  -->
    @yield('content')
    <!-- main section starts  -->

    <!-- footer section starts  -->
    @include('frontend.layouts.footer')
    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

    @yield('js')
</body>

</html>