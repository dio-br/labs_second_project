
@extends('templates.structure')
@section('content')
<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="{{ asset("img/logo.png") }}" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li><a href="{{ route("home") }}">Home</a></li>
            <li><a href="{{ route("service") }}">Services</a></li>
            <li><a href="{{ route("blog") }}">Blog</a></li>
            <li class="active"><a href="{{ route("contact") }}">Contact</a></li>
            <li><a href="{{ route("login") }}">Login</a></li>
            <li><a href="{{ route("register") }}">Register</a></li>
            
        </ul>
    </nav>
</header>
<!-- Header section end -->


<!-- Page header -->
<div class="page-top-section">
    <div class="overlay"></div>
    <div class="container text-right">
        <div class="page-info">
            <h2>Contact</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Contact</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end -->
<!-- Google map -->
<div class="map" id="map-area"></div>
@include('contact.contact')
    
@endsection
	


	

	
