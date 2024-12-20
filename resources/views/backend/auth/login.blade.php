<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jobs | Admin</title>
    <link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center py-5">
        <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
            <form action="{!! route('admin.login.post') !!}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <h4>Admin Login</h4>
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
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
<script src="{!! asset('assets/js/bootstrap.min.js') !!}"></script>
</html>
