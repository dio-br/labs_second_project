@extends('adminlte::page')
@section('content')
<section class="container">
    <h1 class="text-center my-5">Logo</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Logo</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($logo as $i)
        <tbody>
            <tr>
              <td><img class="w-25" src="{{asset("img/$i->logo")}}"></td>
              <td class="d-flex">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit3-{{ $i->id }}">Edit</button>
                @include('logo.edit')
                

              </td>
            </tr>
        </tbody>
        @endforeach
      </table>

</section>
    
@endsection