@extends('templates.structure')
@section('content')
<!-- Header section -->
<header class="header-section">
    <div class="logo">
        @foreach ($logo as $i)
            <img class="logo1" src="{{ asset("img/$i->logo") }}" alt=""><!-- Logo -->
        @endforeach
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
           @foreach ($navbar as $i)
           <li><a href="{{ route("home") }}">{{ $i->link1 }}</a></li>
           <li class="active"><a href="{{ route("service") }}">{{ $i->link2 }}</a></li>
           <li><a href="{{ route("blog") }}">{{ $i->link3 }}</a></li>
           <li><a href="{{ route("contact") }}">{{ $i->link4 }}</a></li>
           <li><a href="{{ route("login") }}">Login</a></li>
           <li><a href="{{ route("register") }}">Register</a></li>
               
           @endforeach
        
        </ul>
    </nav>
</header>
<!-- Header section end -->
@include('pageHeader.pageHeader')
@include('service.service')
@include('feature.feature')
@include('serviceCard.serviceCard')
@include('newsletter.newsletter')
@include('contact.contact')
@endsection

	


	



	


	


	


	