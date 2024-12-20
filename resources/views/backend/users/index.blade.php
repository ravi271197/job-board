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
                    <th scope="col">Status</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $key => $value)
                    <tr>
                        <th scope="row">{!! $loop->iteration !!}</th>
                        <td>{!! $value->name !!}</td>
                        <td>{!! $value->description !!}</td>
                        <td>{!! $value->status !!}</td>
                        <td>
                            <a href="{!! route('admin.category.edit', ['id' => $value->id]) !!}" class="btn btn-info">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
