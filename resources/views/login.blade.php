<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email" required>
            @error('email') <p class="error">{{ $message }}</p> @enderror

            <input type="password" name="password" placeholder="Password" required>
            @error('password') <p class="error">{{ $message }}</p> @enderror

            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>