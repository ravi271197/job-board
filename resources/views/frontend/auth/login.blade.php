@extends('layout.index')

@section('content')
    <div class="container d-flex justify-content-center align-items-center py-5">
        <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
            <form action="{!! route('login.post') !!}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4>Login</h4>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" name="submit" value="submit">
                        <a href="{!! route('social.login') !!}" class="btn btn-primary">Github Login</a>
                    </div>
                </div>
            </form>
            <div class="card-footer text-center">
                <p class="mb-0">Don't have an account? 
                    <a href="{!! route('registration') !!}" class="text-primary">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
@endsection
