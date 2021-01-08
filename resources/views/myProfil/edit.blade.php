<div class="modal fade profil-{{ Auth::user()->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <h1 class="text-center mb-5 mt-5 text-dark">Edit My profil</h1>
        <form action="/user/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
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
                <label for="formGroupExampleInput2" class="text-dark h4">Photo</label>
                <input type="file" class="form-control w-75"  id="formGroupExampleInput2" name="photo" value="{{ Auth::user()->photo }}" >
            </div>
            <div class="form-group d-flex flex-column align-items-center">
              <label for="formGroupExampleInput" class="text-dark h4">Name</label>
              <input type="text" class="form-control w-75" id="formGroupExampleInput" value="{{ Auth::user()->name }}" name="name">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
              <label for="formGroupExampleInput2" class="text-dark h4" >Email</label>
              <input type="text" class="form-control w-75" id="formGroupExampleInput2" value="{{ Auth::user()->email }}" name="email">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2" class="text-dark h4">Role_ID</label>
                <select class="form-control w-75" name="role_id">
                    @foreach ($roles as $i)
                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2" class="text-dark h4">Password</label>
                <input type="password" class="form-control w-75" id="formGroupExampleInput2" value="{{ Auth::user()->password }}" name="password">
            </div>
            <div class="d-flex w-100 justify-content-center my-5">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
      </div>
    </div>
  </div>