@extends('adminlte::page')
@section('content')
<section class="container">
  @if (Auth::user()->role_id === 1 || Auth::user()->role_id === 2 || Auth::user()->role_id === 3 )
        
    
    <h1 class="text-center my-5">Article</h1>
    <button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target=".create47">Create Article</button>
    @include('article.create')
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
        @foreach ($article as $i)
        <tbody>
            <tr>
              <td><img class="w-50" src="{{asset("img/blog/$i->image")}}"></td>
              <td>{{ $i->texte }}</td>
              <td>
                @foreach ($i->tags as $item)
                 {{ $item->name }}
                    
                @endforeach
              </td>
              <td>
                @foreach ($i->categories as $item)
                 {{ $item->name }}
                    
                @endforeach
              </td>
              <td>{{ $i->description }}</td>
              <td>
                <form action="/send-article/{{ $i->id }}" method="post">
                    @csrf
                    <div class="form-group">

                        <select class="form-control" name="verification_id" style="width: 10rem">

                            @foreach ($verification as $i)
                            <option value="{{ $i->id }}">{{ $i->name }}</option>

                            @endforeach


                        </select>
                        <button type="submit">Definir</button>
                    </div>
                </form>
            </td>
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
        @foreach ($commentaire as $i)
        <tbody>
            <tr>
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