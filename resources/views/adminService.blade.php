@extends('adminlte::page')
@section('content')
<section class="container pb-5">
    <h1 class="text-center my-5">Page Service</h1>
  <div class="bg-dark rounded">
    <h1 class="text-center my-5">Service Prime Titre and Boutton</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titre Principal</th>
            <th scope="col">Boutton</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($servicePrime as $i)
        <tbody>
            <tr>
              <td>{{ $i->titre }}</td>
              <td>{{ $i->boutton }}</td>
              <td class="d-flex">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit30-{{ $i->id }}">Edit</button>
                @include('servicePrime.edit')
                

              </td>
            </tr>
          </tbody>
        @endforeach
      </table>
  </div>
    <h1 class="text-center my-5">Service Prime</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Texte</th>
            <th scope="col">Icone</th>
          </tr>
        </thead>
        @foreach ($iconePrime as $i)
        <tbody>
            <tr>
              <td>{{ $i->titre }}</td>
              <td>{{ $i->texte }}</td>
              <td><i class="h1 {{ $i->icone }}"></i></td>
              <td class="d-flex">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit31-{{ $i->id }}">Edit</button>
                @include('iconePrime.edit')
                

              </td>
            </tr>
          </tbody>
        @endforeach
      </table>
  <div class="bg-dark rounded">
      <h1 class="text-center my-5">Blog Rapid</h1>
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".create32">Create</button>
                  @include('blocRapid.create')
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Image</th>
              <th scope="col">Titre</th>
              <th scope="col">Texte</th>
            </tr>
          </thead>
          @foreach ($blocRapid as $i)
          <tbody>
              <tr>
                <td><img src="{{ asset("/img/$i->image") }}" alt=""></td>
                <td>{{ $i->titre }}</td>
                <td>{{ $i->texte }}</td>
                <td class="d-flex">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit32-{{ $i->id }}">Edit</button>
                  @include('blocRapid.edit')
                  <form action="/blocRapid/{{ $i->id }}" method="POST">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger">Delete</button>

                  </form>
                  
  
                </td>
              </tr>
            </tbody>
          @endforeach
        </table>
  </div>

</section>
    
@endsection