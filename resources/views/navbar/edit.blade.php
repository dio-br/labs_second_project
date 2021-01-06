<div class="modal fade edit2-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <h1 class="text-center mb-5 mt-5"> Edit Navbar</h1>
        <form action="/navbar/{{ $i->id }}" method="POST">
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
              <label for="formGroupExampleInput">Link1</label>
              <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->link1 }}" name="link1">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
              <label for="formGroupExampleInput2">Link2</label>
              <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $i->link2 }}" name="link2">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2">Link3</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $i->link3 }}" name="link3">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2">Link4</label>
                <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ $i->link4 }}" name="link4">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>