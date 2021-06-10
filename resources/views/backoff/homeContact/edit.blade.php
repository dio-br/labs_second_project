<div class="modal fade edit16-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <h1 class="text-center mb-5 mt-5">Contact Home</h1>
        <form action="/homeContact/{{ $i->id }}" method="POST">
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
              <label for="formGroupExampleInput">Titre1</label>
              <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->titre1 }}" name="titre1">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
              <label for="formGroupExampleInput2">Texte</label>
              <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $i->texte }}" name="texte">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2">Titre2</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $i->titre2 }}" name="titre2">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2">Info1</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $i->info1 }}" name="info1">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2">Info2</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $i->info2}}" name="info2">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2">Info3</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $i->info3}}" name="info3">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2">Info4</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $i->info4}}" name="info4">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2">Boutton</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $i->boutton}}" name="boutton">
            </div>
            
            <div class="d-flex w-100 justify-content-center my-5">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
      </div>
    </div>
  </div>