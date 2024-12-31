@extends('layout.admin.index')

@section('content')
    <div class="container py-3">
        <h3>Manage Category</h3>
        <a href="{!! route('admin.category.create') !!}" class="btn btn-primary">Create</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
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
                        <td>{!! $value->status == 0 ? "Inactive" : "Active" !!}</td>
                        <td>
                            <a href="{!! route('admin.category.edit', ['id' => $value->id]) !!}" class="btn btn-info">Edit</a>
                            <a href="{!! route('admin.category.delete',['id' => $value->id]) !!}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            {{ $categories->links() }}
          {{-- <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li> --}}
        </ul>
      </nav>
    
@endsection
