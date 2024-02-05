@extends('dashboard.index')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-body align-items-center m-4">
                        <div class="mb-3 text-secondary">
                            <h3>Create User</h3>
                        </div>
                        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name">

                            </div>


                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password</label>
                                <input type="password" class="form-control" id="pwd" name="password">
                            </div>

                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                {{-- <input type="text" class="form-control" id="role"> --}}

                                <select class="form-select" aria-label="Default select example" id="role" name="role">
                                    <option selected>Role</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Agent</option>
                                    <option value="3">User</option>
                                  </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
