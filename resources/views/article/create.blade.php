<div class="modal fade create47" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <h1 class="text-center mb-5 mt-5"> Create Article</h1>
        <form action="{{ route("article.store") }}" method="POST" enctype="multipart/form-data">
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
                <label for="formGroupExampleInput">Titre</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" name="titre">
            </div>
           
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Texte</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" name="texte">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Tag_ID</label>
                <select multiple="" name="tab[]" id="">
                    @foreach ($tag as $e)
                    <option value="{{ $e->id }}" {{ in_array($e->id, old("tab")?: []) ? "selected" : " " }}>{{ $e->name }}</option>
                        
                    @endforeach
                </select>
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Category_ID</label>
                <select multiple="" name="tab2[]" id="">
                    @foreach ($category as $i)
                    <option value="{{ $i->id }}" {{ in_array($i->id, old("tab2")?: []) ? "selected" : " " }}>{{ $i->name }}</option>
                        
                    @endforeach
                </select>
            </div>
            <div class="form-group">

                <select class="form-control" name="verification_id" style="display: none">
    
    
                        <option value="{{ $verification[1]->id }}">{{ $verification[1]->name }}</option>
    
    
                </select>
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput">Description</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput" name="description">
            </div>
          
            <div class="d-flex w-100 justify-content-center my-5">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
      </div>
    </div>
  </div>