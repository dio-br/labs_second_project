<div class="modal fade create" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="{{ route("user.store") }}" method="POST" enctype="multipart/form-data">
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
            <h1 class="text-center mb-5 mt-5"> Create User</h1>
            <div class="form-group d-flex flex-column align-items-center">
              <label for="formGroupExampleInput">Name</label>
              <input type="text" class="form-control w-75" id="formGroupExampleInput" name="name">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
              <label for="formGroupExampleInput2">Email</label>
              <input type="text" class="form-control w-75" id="formGroupExampleInput2" name="email">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2">Password</label>
                <input type="password" class="form-control w-75" id="formGroupExampleInput2" name="password">
            </div>
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2">Role</label>
                <select class="form-control w-75" name="role_id">
                    @foreach ($roles as $i)
                    <option value="{{ $i->id }}">{{ $i->name }}</option>
                    @endforeach
                </select>
                
            </div>
            
            <div class="form-group d-flex flex-column align-items-center">
                <label for="formGroupExampleInput2">Photo</label>
                <input type="file" class="form-control w-75" id="formGroupExampleInput2" name="photo">
            </div>
            <div class="d-flex w-100 justify-content-center my-5">
              <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
      </div>
    </div>
  </div>