<div class="modal fade edit6-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <h1 class="text-center mb-5 mt-5"> Edit About</h1>
        <form action="/aboutContent/{{ $i->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("put")
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Titre</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->titre }}" placeholder="Placer des parenthèses pour mettre du texte en vert..." name="titre">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Texte1</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->texte1 }}" name="texte1">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Texte2</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->texte2 }}" name="texte2">
            </div>

            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Bouton</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->boutton }}" name="boutton">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Image</label>
                <input type="file" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->image }}" name="image">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Vidéo</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->video }}" name="video" placeholder="Coller l'url de la vidéo youtube...">
            </div>

            
            <div class="d-flex w-100 justify-content-center my-5">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
      </div>
    </div>
  </div>