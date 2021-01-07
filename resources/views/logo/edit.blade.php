<div class="modal fade edit3-{{ $i->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <h1 class="text-center mb-5 mt-5"> Edit Logo</h1>
        <form action="/logo/{{ $i->id }}" method="POST" enctype="multipart/form-data">
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
              <label for="formGroupExampleInput">Logo</label>
              <input type="file" class="form-control w-75" id="formGroupExampleInput" value="{{ $i->logo }}" name="logo">
            </div>
            
            <div class="d-flex w-100 justify-content-center my-5">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
      </div>
    </div>
  </div>