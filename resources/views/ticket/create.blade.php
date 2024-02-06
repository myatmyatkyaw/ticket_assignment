@extends('dashboard.index')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body align-items-center m-4">
                    <h3 class="text-secondary mb-3"> Create Ticket </h3>

                    <form action="{{ route('ticket.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="col-auto">
                            <label  class="col-form-label">Title<small class="text-danger">*</small></label>
                            <input type="text"  class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}">

                            @error('title')
                            <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>

                        <div class="col-auto">
                            <label  class="col-form-label">Message<small class="text-danger">*</small></label>
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}"></textarea>

                            @error('message')
                            <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>

                        <div class="col-auto">
                            <label for="priority">Priority</label>
                            <select name="priority" id="priority" class="form-control @error('priority') is-invalid @enderror">
                                {{-- @foreach($users as $user) --}}
                                <option value="high" selected>HIGH</option>
                                <option value="low">LOW</option>
                                {{-- @endforeach --}}
                            </select>

                            @error('priority')
                                <div class="text-danger">*{{$message}}</div>
                            @enderror
                        </div>

                        

                        <div class="col-auto">
                            <label for="label_id">Labels</label>
                            <select class="form-control" name="label_id" id="label_id">
                                @foreach($labels as $label)
                                    <option name="label_id" value="{{ $label->id }}">{{ $label->name }}</option>
                                @endforeach
                            </select>

                            @error('label_id')
                                <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>


                        <div class="col-auto">
                            <label for="category_id">Categories</label>
                            <select class="form-control" name="category_id" id="category_id">
                                @foreach($categories as $category)
                                    <option name="category_id" value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>

                            @error('category_id')
                                <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>

                        <div class="col-auto">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                                {{-- @foreach($users as $user) --}}
                                <option value="open" selected>open</option>
                                <option value="close">close</option>
                                {{-- @endforeach --}}
                            </select>

                            @error('status')
                                <div class="text-danger">*{{$message}}</div>
                            @enderror

                        </div>



                        <div class="col-sm mt-3">
                        <a href="{{ route('ticket.index') }}" class="btn btn-outline-dark">Back</a>
                        <button type="submit" class="btn btn-outline-dark">Create</button>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endsection
