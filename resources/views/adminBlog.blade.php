@extends('adminlte::page')
@section('content')
<section class="container">
    <h1 class="text-center my-5">Article</h1>
    <button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target=".create47">Create Article</button>
    @include('article.create')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Titre</th>
            <th scope="col">Jour</th>
            <th scope="col">Mois</th>
            <th scope="col">Annee</th>
            <th scope="col">Texte</th>
            <th scope="col">User_id</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($article as $i)
        <tbody>
            <tr>
              <td><img class="w-50" src="{{asset("img/blog/$i->image")}}"></td>
              <td>{{ $i->titre }}</td>
              <td>{{ $i->jour }}</td>
              <td>{{ $i->mois }}</td>
              <td>{{ $i->annee }}</td>
              <td>{{ $i->texte }}</td>
              <td>{{ $i->users->id }}</td>
              <td>{{ $i->description }}</td>
              <td class="d-flex">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit47-{{ $i->id }}">Edit</button>
                @include('article.edit')
                <form action="/article/{{ $i->id }}" method="POST">
                  @csrf
                  @method("delete")
                  <button class="btn btn-danger">Delete</button>
                </form>
                

              </td>
            </tr>
        </tbody>
        @endforeach
    </table>

    <div class="bg-dark rounded">
    <h1 class="text-center my-5">Commentaire</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Jour</th>
            <th scope="col">Mois</th>
            <th scope="col">Année</th>
            <th scope="col">Texte</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($commentaire as $i)
        <tbody>
            <tr>
              <td>{{ $i->jour }}</td>
              <td>{{ $i->mois }}</td>
              <td>{{ $i->annee }}</td>
              <td>{{ $i->texte }}</td>
              <td class="d-flex">
                <form action="/commentaire/{{ $i->id }}" method="POST">
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