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

<header class="header">

    <a href="#" class="logo"><span>b</span>logger</a>

    <nav class="navbar">
        <a href="#banner">banner</a>
        <a href="#posts">my posts</a>
        <a href="#contact">contact me</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
    </div>

    <form action="" class="search-form">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>

</header>

@yield('content')

<!-- footer section starts  -->

<section class="footer">

    <div class="follow">
        <a href="https://facebook.com/freewebsitecode/" class="fab fa-facebook-f"></a>
        <a href="https://freewebsitecode.com/" class="fab fa-twitter"></a>
        <a href="https://freewebsitecode.com/" class="fab fa-instagram"></a>
        <a href="https://freewebsitecode.com/" class="fab fa-linkedin"></a>
        <a href="https://www.youtube.com/channel/UC9HlQRmKgG3jeVD_fBxj1Pw/videos" class="fab fa-youtube"></a>
    </div>

    <div class="credit">created by <span><a href="https://freewebsitecode.com/">Free Website Code</a></span> | all rights reserved</div>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>

@yield('js')
</body>
</html>