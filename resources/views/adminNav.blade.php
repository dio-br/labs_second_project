@extends('adminlte::page')
@section('content')
<section class="container">
    <div class="bg-dark rounded">
      <h1 class="text-center my-5">Menu</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Link1</th>
            <th scope="col">Link2</th>
            <th scope="col">Link3</th>
            <th scope="col">Link4</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($navbar as $i)
        <tbody>
            <tr>
              <td>{{ $i->link1 }}</td>
              <td>{{ $i->link2 }}</td>
              <td>{{ $i->link3 }}</td>
              <td>{{ $i->link4 }}</td>
              <td class="d-flex">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit2-{{ $i->id }}">Edit</button>
                @include('navbar.edit')
                

              </td>
            </tr>
          </tbody>
        @endforeach
      </table>

    </div>

</section>
    
@endsection