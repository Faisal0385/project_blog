@extends('frontend.layouts.master_frontend')

@section('content')

<!-- banner section starts  -->
@include('frontend.post.components.banner')
<!-- banner section ends -->

<!-- posts section start -->
<section class="container" id="posts">
    <!-- posts section starts  -->
    @include('frontend.post.components.posts')
    <!-- posts section sidebar  -->
    @include('frontend.post.components.sidebar')
</section>

<!-- posts section ends -->
@endsection