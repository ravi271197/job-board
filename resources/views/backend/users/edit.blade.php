@extends('layout.admin.index')

@section('content')
<div class="container">
    <h3>View User</h3>
    <form action="" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{!! $user->name !!}" placeholder="Name" disabled>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{!! $user->email !!}" placeholder="Email" disabled>
        </div>
        {{-- <input type="submit" value="submit" name="submit" class="btn btn-primary" /> --}}
    </form>
</div>
@endsection