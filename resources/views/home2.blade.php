@extends('templates.structure')

@section('content')
<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src=" {{ asset("img/logo.png") }}" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li class="active"><a href="{{ route("home") }}">Home</a></li>
            <li><a href="{{ route("service") }}">Services</a></li>
            <li><a href="{{ route("blog") }}">Blog</a></li>
            <li><a href="{{ route("contact") }}">Contact</a></li>
            <li><a href="">Connected</a></li>
            
            
           
            

        </ul>
    </nav>
</header>
<!-- Header section end -->
@include('banner.banner')
@include('about.about')
@include('testimonial.testimonial')
@include('service.service')
@include('team.team')
@include('promotion.promotion')
@include('contact.contact')
@endsection