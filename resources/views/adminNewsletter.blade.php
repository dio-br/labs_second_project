@extends('adminlte::page')
@section('content')
<section class="container">
    <h1 class="text-center my-5">Newsletter List</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($newsletter as $i)
        <tbody>
            <tr>
              <td>{{ $i->id }}</td>
              <td>{{ $i->email }}</td>
              <td class="d-flex">
                <form action="/newsletter/{{ $i->id }}" method="POST">
                  @csrf
                  @method("delete")
                  <button class="btn btn-danger">Delete</button>
                </form>
                

              </td>
            </tr>
        </tbody>
        @endforeach
    </table>
    
</section>
    
@endsection