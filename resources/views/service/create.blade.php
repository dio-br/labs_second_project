<div class="modal fade create5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <h1 class="text-center mb-5 mt-5"> Create Service</h1>
        <form action="{{ route("serviceHome.store") }}" method="POST">
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
              <label for="formGroupExampleInput">Icone</label>
              <select name="icone" value="{{ $i->icone }}">
                  @foreach ($serviceHome as $e)
                  <option>{{ $e->icone }}</option>
                      
                  @endforeach

              </select>
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Titre</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" name="titre">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Texte</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" name="texte">
              </div>
            
            <div class="d-flex w-100 justify-content-center my-5">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
      </div>
    </div>
  </div>