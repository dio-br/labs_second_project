@extends('adminlte::page')
@section('content')
<section class="container">
    <div class="row bg-dark d-flex flex-column rounded">
        <h1 class="text-center pt-3">My Profil</h1>
        <div class="d-flex align-items-center">
            <div class="col-4 p-2 d-flex justify-content-center">
                
                <img src="{{asset('img/'. Auth::user()->photo)}}" class="w-75">
    
                
            </div>
            <div class="col-8 p-2 overflow-hidden">
                <div class="w-100 py-5 px-3">
                    <h3 class="py-2">Name: {{ Auth::user()->name }}</h1>
                    <h3 class="py-2">Email: {{ Auth::user()->email }}</h1>
                    <h3 class="py-2">Role: {{ Auth::user()->roles->name }}</h1>
                </div>
    
            </div>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button type="button" class="btn btn-success px-5 py-2 mb-5 mx-2" data-toggle="modal" data-target=".profil-{{ Auth::user()->id }}"><h3 class="p-0 m-0">Edit</h3></button>
            @include('backoff.myProfil.edit')
            <form method="POST" action="{{ route('logout') }}"> 
                @csrf
                <x-jet-responsive-nav-link href="{{ route('logout') }}" class="btn btn-danger px-5 py-2 mb-5 mx-2"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                    <h3 class="p-0 m-0">{{ __('Logout') }}</h3>
                </x-jet-responsive-nav-link>
            </form>
        </div>
    </div>

</section>
    
@endsection
