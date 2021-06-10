@extends('adminlte::page')
@section('content')
<section class="container">
  @if (Auth::user()->role_id === 1 || Auth::user()->role_id === 2 || Auth::user()->role_id === 3 )
        
    
    <h1 class="text-center my-5">Article</h1>
    <button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target=".create47">Create Article</button>
    @include('backoff.article.create')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Titre</th>
            <th scope="col">Texte</th>
            <th scope="col">Tag_ID</th>
            <th scope="col">Category_ID</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
      @foreach ($article as $e)
        <tbody>
            <tr>
              <td><img class="w-50" src="{{asset("img/blog/$e->image")}}"></td>
              <td>{{ $e->titre }}</td>
              <td>{{ $e->texte }}</td>
              <td>
                @foreach ($e->tags as $i)
                 {{ $i->name }}
                    
                @endforeach
              </td>
              <td>
                @foreach ($e->categories as $i)
                 {{ $i->name }}
                    
                @endforeach
              </td>
              <td>{{ $e->description }}</td>
              <td>
                @if (Auth::user()->role_id === 1)
                <form action="/send-article/{{ $e->id }}" method="post">
                  @csrf
                  
                  <div class="form-group">

                      <select class="form-control" name="verification_id" style="width: 10rem">

                          @foreach ($verification as $a)
                          <option value="{{ $a->id }}">{{ $a->name }}</option>

                          @endforeach


                      </select>
                      <button type="submit">Definir</button>
                  </div>
              </form>
                    
                @endif
                
            </td>
              <td class="d-flex">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit47-{{ $e->id }}">Edit</button>
                @include('backoff.article.edit')
                <form action="/article/{{ $e->id }}" method="POST">
                  @csrf
                  @method("delete")
                  <button class="btn btn-danger">Delete</button>
                </form>
                

              </td>
            </tr>
        </tbody>
      @endforeach
    </table>
  @endif

    <div class="bg-dark rounded">
    <h1 class="text-center my-5">Commentaires</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Texte</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($commentaire as $b)
        <tbody>
            <tr>
              <td>{{ $b->texte }}</td>
              <td class="d-flex">
                <form action="/commentaire/{{ $b->id }}" method="POST">
                  @csrf
                
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                

              </td>
            </tr>
        </tbody>
        @endforeach
    </table>


    </div>

</section>
    
@endsection