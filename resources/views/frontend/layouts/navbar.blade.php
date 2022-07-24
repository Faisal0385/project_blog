<header class="header">

    <a href="{{ route('home') }}" class="logo"><span>b</span>logger</a>

    <nav class="navbar">
        <a href="{{ route('home') }}">home</a>
        <a href="{{ route('my.post') }}">my posts</a>
        <a href="{{ route('contact') }}">contact me</a>
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