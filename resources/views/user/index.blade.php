@extends('dashboard.index')

@section('content')
    <div class="container mt-3">


        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body shadow">
                        <div class="mb-3 text-secondary">
                            <h3>User List</h3>
                        </div>
                        {{-- @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif

        @if (session('delete'))
        <div class="alert alert-danger">
          {{ session('delete') }}
        </div>
      @endif

      @if (session('update'))
      <div class="alert alert-info">
        {{ session('update') }}
      </div>
    @endif --}}




                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Role</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        {{-- <td>{{ $user->password }}</td> --}}
                                        <td>{{ $user->role }}</td>


                                        <td>

                                            <a href="{{ route('user.edit', $user->id) }}"
                                                class="btn btn-outline-warning">
                                                <i class="fas fa-pencil-alt"> </i>
                                            </a>

                                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-outline-info">
                                                <i class="fas fa-info"> </i>
                                            </a>

                                            <form action="{{ route('user.destroy', $user->id) }}" method="post"
                                                class="d-inline-block">
                                                @method('delete')
                                                @csrf

                                                <button class="btn btn-outline-danger "
                                                    onclick="return confirm('Are you sure you want to delete?')"><i
                                                        class="fas fa-trash-alt"></i></button>


                                            </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
