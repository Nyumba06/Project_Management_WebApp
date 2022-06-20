<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name', 'Project Management App') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>
<body>

<div class="jumbotron bg-secondary text-white text-center" style="margin-bottom:0;padding:16%;">
  <h1>Project Management Web App</h1>
  <p>Manage your Projects with Our App</p>
  @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary btn-lg">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Log in</a>
                    @endauth
                </div>
    @endif
</div>

</body>
</html>