<div class="modal fade create12" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <h1 class="text-center mb-5 mt-5">Create a new profil</h1>
        <form action="{{ route("profilTeam.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
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
              <input type="file" class="form-control w-75" id="formGroupExampleInput" name="image">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Prénom</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" name="prenom">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Fonction</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" name="fonction">
              </div>
              <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Position</label>
                <select name="position" value="{{ $i->postion }}">
                  <option>centre</option>
                  <option>coté</option>
                  
                </select>
              </div>
            
            <div class="d-flex w-100 justify-content-center my-5">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
      </div>
    </div>
  </div>