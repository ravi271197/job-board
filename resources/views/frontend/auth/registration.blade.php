@extends('layout.index')

@section('content')
    <div class="container d-flex justify-content-center align-items-center py-5">
        <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{!! route('registration.post') !!}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4>Registration</h4>
                    <div class="mb-3">
                        <label for="full name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password">
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="submit" name="submit">
                </div>
            </form>
            <div class="card-footer text-center">
                <p class="mb-0">Already have an account?
                    <a href="{!! route('login') !!}" class="text-primary">Login</a>
                </p>
            </div>
        </div>
    </div>

@endsection


