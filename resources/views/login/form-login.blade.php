
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="andri syafi ">
    <meta name="generator" content="andri syafi">
    <title>Laravel Inventory</title>
    <link href="{{ asset('bootstrap-5.3.2/css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">


<main class="form-signin w-50 m-auto">
  <form method="POST" action="{{ route('kirim-data-login')}}">
    @csrf
    <img class="mb-4" src="{{asset ('image/gambar1.jpeg') }}" alt="" width="90" height="70">
    <br> {{ $errors->first('email')}}
    <h1 class="h3 mb-3 fw-normal">Silahkan Isi dari formulir dibawah</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="btn btn-primary w-100 py-2 mt-4" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>
<script src="{{asset('bootstrap-5.3.2/js/bootstrap.bundle.min.js')}}" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    </body>
</html>
