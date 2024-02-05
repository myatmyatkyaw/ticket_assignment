@extends('dashboard.index')

@section('content')
<div class="container">
    <form method="POST" action="{{route('user.update',$user->id)}}">
        @csrf
        @method('PUT')
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="align-items-center m-4">


                    <div class="col-auto">
                        <label for="inputname" class="col-form-label">Edit User Name</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputname" class="form-control" name="name" value="{{ $user->name }}">
                        {{-- @error('name')
                        <div class="text-danger">*{{$message}}</div>
                        @enderror --}}
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputname" class="form-control" name="email" value="{{ $user->email }}">
                        {{-- @error('name')
                        <div class="text-danger">*{{$message}}</div>
                        @enderror --}}
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputname" class="form-control" name="password" value="{{ $user->password }}">
                        {{-- @error('name')
                        <div class="text-danger">*{{$message}}</div>
                        @enderror --}}
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputname" class="form-control" name="role" value="{{ $user->role}}">
                        {{-- @error('name')
                        <div class="text-danger">*{{$message}}</div>
                        @enderror --}}
                    </div>




                    <div class="col-sm mt-3">
                    <a href="{{ route('user.index') }}" class="btn btn-outline-dark">Back</a>
                    <button type="submit" class="btn btn-outline-primary">Update</button>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection
