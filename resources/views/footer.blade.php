@extends('adminlte::page')
@section('content')
<section class="container">
    <h1 class="text-center my-5">Footer</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Texte</th>
            <th scope="col">Autor</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($footer as $i)
        <tbody>
            <tr>
              <td>{{ $i->phrase }}</td>
              <td>{{ $i->autor }}</td>
              <td class="d-flex">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit50-{{ $i->id }}">Edit</button>
                @include('backoff.footer.edit')
                

              </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</section>
    
@endsection
