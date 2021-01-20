@extends('adminlte::page')
@section('content')
<section class="container pb-5">

  <h1 class="text-center my-5">Page Home</h1>
  @if (Auth::user()->role_id === 1 || Auth::user()->role_id === 2)
  <div class="bg-dark rounded">
    <h1 class="text-center my-5">Banner Slogan</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Slogan</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($titreSlogan as $i)
        <tbody>
            <tr>
              <td>{{ $i->titre }}</td>
              <td class="d-flex">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit15-{{ $i->id }}">Edit</button>
                @include('titreSlogan.edit')
                

              </td>
            </tr>
        </tbody>
        @endforeach
    </table>
  </div>
  
    <h1 class="text-center my-5">Banner Image</h1>
    <button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target=".create0">Create Banner Image</button>
    @include('banner.create')
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($banner as $i)
        <tbody>
            <tr>
              <td><img class="w-50" src="{{asset("img/$i->image")}}"></td>
              <td class="d-flex">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit4-{{ $i->id }}">Edit</button>
                @include('banner.edit')
                <form action="/banner/{{ $i->id }}" method="POST">
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
    <h1 class="text-center my-5">Titre et Boutton Service</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Boutton</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($titreService as $i)
        <tbody>
            <tr>
              <td>{{ $i->titre }}</td>
              <td>{{ $i->boutton }}</td>
              <td class="d-flex">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit10-{{ $i->id }}">Edit</button>
                @include('titreService.edit')
                
                

              </td>
            </tr>
        </tbody>
        @endforeach
    </table>
  </div>

    <h1 class="text-center my-5">Service</h1>
    @can('create', App\Models\ServiceHome::class)
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".create5">Create</button>
      @include('service.create')
    @endcan
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Icone</th>
            <th scope="col">Titre</th>
            <th scope="col">Text</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($serviceHome as $i)
        <tbody>
            <tr>
              <td>
                  <div class="icon"><i class="{{ $i->icone }} h1"></i></div>
              </td>
              <td>{{ $i->titre }}</td>
              <td>{{ $i->texte }}</td>
              <td class="d-flex">
                @can('update', $i)
                     <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit5-{{ $i->id }}">Edit</button>
                      @include('service.edit')
                  @endcan
                
                <form action="/serviceHome/{{ $i->id }}" method="POST">
                  @csrf
                  @method("delete")
                  @can('delete', $i)
                      <button class="btn btn-danger">Delete</button>
                  @endcan
                  
                
                
                </form>
                

              </td>
            </tr>
        </tbody>
        @endforeach
    </table>
  <div class="bg-dark rounded">

    <h1 class="text-center my-5">About</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Texte1</th>
            <th scope="col">Texte2</th>
            <th scope="col">Bouton</th>
            <th scope="col">Image</th>
            <th scope="col">Vidéo</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($aboutContent as $i)
        <tbody>
            <tr>
              
              <td>{{ $i->titre }}</td>
              <td>{{ $i->texte1 }}</td>
              <td>{{ $i->texte2 }}</td>
              <td>{{ $i->boutton }}</td>
              <td><img class="w-100" src="{{ asset("/img/$i->image") }}" alt=""></td>
              <td>{{ $i->video }}</td>
              <td class="d-flex">
                @can('update', $i)
                  @include('about.edit')
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit6-{{ $i->id }}">Edit</button>
                @endcan
                
                
                

              </td>
            </tr>
        </tbody>
        @endforeach
    </table>
  </div>
    <h1 class="text-center my-5">Titre Testimonial</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($titreTestimonial as $i)
        <tbody>
            <tr>
              
              <td>{{ $i->titre }}</td>
              
              <td class="d-flex">
                @can('update', $i)
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit7-{{ $i->id }}">Edit</button>
                @include('titreTestimonial.edit')
                @endcan
                
      
                

              </td>
            </tr>
        </tbody>
        @endforeach
    </table>
  <div class="bg-dark rounded">
  
    <h1 class="text-center my-5">Testimonial Commentary</h1>
    @can('create', App\Models\Testimonial::class)
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".create7">Create</button>
    @include('testimonial.create')
    @endcan
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Texte</th>
            <th scope="col">Image</th>
            <th scope="col">Prénom</th>
            <th scope="col">Fonction</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($testimonial as $i)
        <tbody>
          <tr>
            <td>{{ $i->texte }}</td>
            <td><img class="w-75" src="{{ asset("/img/avatar/$i->image") }}" alt=""></td>
            <td>{{ $i->prenom }}</td>
            <td>{{ $i->fonction }}</td>
            <td class="d-flex">
              @can('update', $i)
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit8-{{ $i->id }}">Edit</button>
                @include('testimonial.edit')
              @endcan
             
              <form action="/testimonial/{{ $i->id }}" method="POST">
                @csrf
                @method("delete")
                @can('delete', $i)
                  <button class="btn btn-danger">Delete</button>
                @endcan
              
              </form>
    
              

            </td>
          </tr>
      </tbody>
            
      @endforeach
    </table>
  </div>
    <h1 class="text-center my-5">Titre Team</h1>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($titreTeam as $i)
        <tbody>
          <tr>
            <td>{{ $i->titre }}</td>
            <td class="d-flex">
              @can('update', $i)
              <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit11-{{ $i->id }}">Edit</button>
              @include('titreTeam.edit')
              @endcan
             

              

            </td>
          </tr>
      </tbody>
            
      @endforeach
    </table>
  <div class="bg-dark rounded">
    <h1 class="text-center my-5">Profil Team</h1>
    @can('create', App\Models\ProfilTeam::class)
      <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".create12">Create</button>
      @include('profilTeam.create')
    @endcan
    
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Image</th>
            <th scope="col">Prenom</th>
            <th scope="col">Fonction</th>
            <th scope="col">Postion</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($profilTeam as $i)
        <tbody>
          <tr>
            <td><img class="w-50" src="{{ asset("/img/team/$i->image") }}" alt=""></td>
            <td>{{ $i->prenom }}</td>
            <td>{{ $i->fonction }}</td>
            <td>{{ $i->position }}</td>
            <td class="d-flex">
              @can('update', $i)
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit12-{{ $i->id }}">Edit</button>
                @include('profilTeam.edit')
              @endcan
              
              <form action="/profilTeam/{{ $i->id }}" method="POST">
                @csrf
                @method("delete")
                
                @can('delete', $i)
                    <button class="btn btn-danger">Delete</button>
                @endcan
              
              </form>

              

            </td>
          </tr>
      </tbody>
            
      @endforeach
    </table>
  </div>
    <h1 class="text-center my-5">Ready</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Titre</th>
            <th scope="col">Texte</th>
            <th scope="col">Boutton</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        @foreach ($ready as $i)
        <tbody>
          <tr>
           
            <td>{{ $i->titre}}</td>
            <td>{{ $i->texte }}</td>
            <td>{{ $i->boutton }}</td>
            <td class="d-flex">
              @can('update', $i)
              <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit13-{{ $i->id }}">Edit</button>
              @include('ready.edit')

              @endcan
            
              

            </td>
          </tr>
      </tbody>
            
      @endforeach
    </table>

  </table>
<div class="bg-dark rounded">
  <h1 class="text-center my-5">Contact</h1>
  <table class="table">
      <thead>
        <tr>
          <th scope="col">Titre1</th>
          <th scope="col">Texte</th>
          <th scope="col">Titre2</th>
          <th scope="col">Info1</th>
          <th scope="col">Info2</th>
          <th scope="col">Info3</th>
          <th scope="col">Info4</th>
          <th scope="col">Boutton</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      @foreach ($homeContact as $i)
      <tbody>
        <tr>
         
          <td>{{ $i->titre1}}</td>
          <td>{{ $i->texte }}</td>
          <td>{{ $i->titre2}}</td>
          <td>{{ $i->info1}}</td>
          <td>{{ $i->info2}}</td>
          <td>{{ $i->info3}}</td>
          <td>{{ $i->info4}}</td>
          <td>{{ $i->boutton }}</td>
          <td class="d-flex">
            @can('update', $i)
            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit16-{{ $i->id }}">Edit</button>
            @include('homeContact.edit')
            @endcan
            

          </td>
        </tr>
    </tbody>
          
    @endforeach
  </table>
</div>


</section>
    
@endsection