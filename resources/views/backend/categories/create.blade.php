@extends('layout.admin.index')

@section('content')
    <div class="container">
        <h3>Create Category</h3>
        <form action="{!! route('admin.category.store') !!}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-primary" />
        </form>
    </div>
@endsection
