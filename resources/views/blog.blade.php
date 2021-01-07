@extends('templates.structure')
@section('content')
<!-- Header section -->
<header class="header-section">
        @foreach ($logo as $i)
            <img class="logo1" src="{{ asset("img/$i->logo") }}" alt=""><!-- Logo -->
        @endforeach
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
@foreach ($navbar as $i)
        <ul class="menu-list">
           <li><a href="{{ route("home") }}">{{ $i->link1 }}</a></li>
           <li><a href="{{ route("service") }}">{{ $i->link2 }}</a></li>
           <li class="active"><a href="{{ route("blog") }}">{{ $i->link3 }}</a></li>
           <li><a href="{{ route("contact") }}">{{ $i->link4 }}</a></li>
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
            <h2>{{ $i->link3 }}</h2>
            <div class="page-links">
                <a href="{{ route("home") }}">{{ $i->link1 }}</a>
                <span>{{ $i->link3 }}</span>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- Page header end-->
@include('pageSection.pageSection')
@include('newsletter.newsletter')
@endsection

	


	
