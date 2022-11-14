<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sekoncoan Florist</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('logo/sekoncoanflorist_white.PNG') }}">
</head>

<body class="text-center">

<main class="form-signin w-100 m-auto">
    <img class="mb-2" src="{{ asset('logo/sekoncoanflorist_black.PNG')}}" alt="sekoncoanfloris">
    <form action="/login" method="POST">
        @csrf
        
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="floatingInput">Email address</label>
            @error('email')
                  <div class="invalid-feedback text-start">
                    {{ $message }}
                  </div>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022 Sekoncoan Florist.</p>
    </form>
</main>

</body>
</html>