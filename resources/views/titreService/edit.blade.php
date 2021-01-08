<div class="modal fade edit10-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <h1 class="text-center mb-5 mt-5"> Edit Titre Service</h1>
        <form action="/titreService/{{ $i->id }}" method="POST">
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
                <label for="formGroupExampleInput">Boutton</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->boutton }}" name="boutton">
            </div>
            
            <div class="d-flex w-100 justify-content-center my-5">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
      </div>
    </div>
  </div>