@extends('adminlte::page')
@section('content')
<section class="container">
  
    <h1 class="text-center my-5">List Users</h1>
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".create">Create</button>
                @include('user.create')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Role_ID</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($user as $i)
        <tbody>
            <tr>
              <td>{{ $i->id }}</td>
              <td>{{ $i->name }}</td>
              <td>{{ $i->email }}</td>
              <td>{{ $i->password }}</td>
              <td>{{ $i->roles->name }}</td>
              <td><img class="w-75" src="{{asset("img/$i->photo") }}" alt=""></td>
              <td class="d-flex">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit-{{ $i->id }}">Edit</button>
                @include('user.edit')
                <form action="/user/{{ $i->id }}" method="POST">
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