@extends('layout.admin.index')

@section('content')
    <div class="container py-3">
        <h3>Manage Users</h3>
        {{-- <a href="{!! route('admin.category.create') !!}" class="btn btn-primary">Create</a> --}}
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>

                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $value)
                    <tr>
                        <th scope="row">{!! $loop->iteration !!}</th>
                        <td>{!! $value->name !!}</td>
                        <td>{!! $value->email !!}</td>

                        <td>
                            <a href="{!! route('admin.users.view', ['id' => $value->id]) !!}" class="btn btn-info">View</a>
                            <a href="{!! route('admin.users.delete', ['id' => $value->id]) !!}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
