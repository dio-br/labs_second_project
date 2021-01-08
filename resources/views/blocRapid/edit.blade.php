<div class="modal fade edit32-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <h1 class="text-center mb-5 mt-5"> Edit BlocRapid</h1>
        <form action="/blocRapid/{{ $i->id }}" method="POST" enctype="multipart/form-data">
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
              <label for="formGroupExampleInput">Image</label>
              <input type="file" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->image }}" name="image">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Titre</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->titre }}" name="titre">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Texte</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->texte }}" name="texte">
            </div>
            <div class="d-flex w-100 justify-content-center my-5">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
      </div>
    </div>
  </div>