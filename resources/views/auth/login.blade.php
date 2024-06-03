<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a2e;
            color: #ccc;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-box {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        .form-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
        }
        .form-box button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        .form-box button:hover {
            background-color: #0069d9;
        }
        .form-box .social-login {
            display: flex;
            justify-content: space-between;
        }
        .form-box .social-login a {
            width: 48%;
            text-align: center;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
        }
        .form-box .google {
            background-color: #db4437;
        }
        .form-box .github {
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Sign In</button>
            </form>
            <div class="social-login">
                <a href="{{ route('social.login', ['provider' => 'google']) }}" class="google">Sign In With Google</a>
                <a href="{{ route('social.login', ['provider' => 'github']) }}" class="github">Sign In With GitHub</a>
            </div>
        </div>
    </div>
</body>
</html>
