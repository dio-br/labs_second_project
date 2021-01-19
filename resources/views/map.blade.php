@extends('adminlte::page')
@section('content')
<section class="container">
    
    <div class=" rounded">
     <h1 class="text-center my-5">Map</h1>
     <table class="table">
         <thead>
           <tr>
             <th scope="col">Address</th>
             <th scope="col">Action</th>
           </tr>
         </thead>
         @foreach ($address as $i)
         <tbody>
             <tr>
               <td>{{ $i->address }}</td>
               <td class="d-flex">
                @can('update', $i)
                <button type="button" class="btn btn-success" data-toggle="modal" data-target=".edit42-{{ $i->id }}">Edit</button>
                 @include('map.edit')
               
                @endcan
                 
                 
 
               </td>
             </tr>
         </tbody>
         @endforeach
     </table>
   </div>

</section>
    
@endsection