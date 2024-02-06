@extends('dashboard.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body shadow">

                    <h3 class="text-secondary mb-3"> Ticket List </h3>

                    <table class="table">

                        <thead class="table-dark">
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Message</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Status</th>
                            <th scope="col">File</th>
                            <th scope="col">Label</th>
                            <th scope="col">Category</th>

                          </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <th scope="row">{{ 1 }}</th>
                                <td>{{ $ticket->title }}</td>
                                <td>{{ $ticket->message }}</td>
                                <td>{{ $ticket->priority }}</td>
                                <td>{{ $ticket->status }}</td>
                                <td>{{ $ticket->file }}</td>
                                <td>{{ $ticket->label_id }}</td>
                                <td>{{ $ticket->category_id }}</td>


                                {{-- <td>{{ $user->role  }}</td> --}}



                            </tr>
                           

                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
