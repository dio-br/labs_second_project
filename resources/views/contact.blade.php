
@extends('templates.structure')
@section('content')
<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img class="logo1" src="{{ asset("img/$i->logo") }}" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
           @foreach ($navbar as $i)
           <li><a href="{{ route("home") }}">{{ $i->link1 }}</a></li>
           <li><a href="{{ route("service") }}">{{ $i->link2 }}</a></li>
           <li><a href="{{ route("blog") }}">{{ $i->link3 }}</a></li>
           <li class="active"><a href="{{ route("contact") }}">{{ $i->link4 }}</a></li>
           <li><a href="{{ route("login") }}">Login</a></li>
           <li><a href="{{ route("register") }}">Register</a></li>
               
           @endforeach
            
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
	


	

	
