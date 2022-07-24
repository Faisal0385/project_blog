@extends('frontend.layouts.master_frontend')

@section('content')

<!-- banner section starts  -->
@include('frontend.index.components.banner')
<!-- banner section ends -->

<section class="container" id="posts">
    <!-- posts section starts  -->
    @include('frontend.index.components.posts')
    <!-- posts section sidebar  -->
    @include('frontend.index.components.sidebar')
</section>

<!-- posts section ends -->

<!-- contact section starts  -->
@include('frontend.index.components.contact')
<!-- contact section ends -->

@endsection