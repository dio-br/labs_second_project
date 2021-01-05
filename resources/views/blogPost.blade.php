@extends('templates.structure')
@section('content')
<!-- Header section -->
<header class="header-section">
    <div class="logo">
        <img src="{{asset("img/logo.png")}}" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            @foreach ($navbar as $i)
            <li><a href="{{route("home")}}">{{ $i->link1 }}</a></li>
            <li><a href="{{route("service")}}">{{ $i->link2 }}</a></li>
            <li class="active"><a href="{{route("blog")}}">{{ $i->link3 }}</a></li>
            <li><a href="{{route("contact")}}">{{ $i->link4 }}</a></li>
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
            <h2>Blog</h2>
            <div class="page-links">
                <a href="#">Home</a>
                <span>Blog</span>
            </div>
        </div>
    </div>
</div>
<!-- Page header end-->
@include('pageSection2.pageSection2')
@include('newsletter.newsletter')




    
@endsection
	

	