<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Wisata</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Nunito', sans-serif;
        }

        .login-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            padding: 40px 30px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .login-card h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .form-control {
            background-color: #f0f2f5;
            border: none;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 15px;
            color: #333;
        }

        .form-control:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(78, 115, 223, 0.5);
        }

        .btn-primary {
            background-color: #4e73df;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: bold;
            color: #fff;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #2e59d9;
        }

        .footer {
            margin-top: 20px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <h1>Login</h1>
        <form action="{{ route('sesi.login') }}" method="POST">
            @csrf
            <input type="email" class="form-control" name="email" value="{{ old('email', Session::get('email')) }}" placeholder="Email" required>
            @error('email')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror

            <input type="password" name="password" class="form-control" placeholder="Password" required>
            @error('password')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn-primary">Login</button>
        </form>
        <div class="footer">
            &copy; {{ date('Y') }} Wisata Website. All rights reserved.
        </div>
    </div>

</body>
</html>
