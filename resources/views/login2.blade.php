<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #333A45;
            color: #939EAE;
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-box {
            background: #2E343D;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 500px;
        }
        .form-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background: #333A45;
            color: #939EAE;
        }
        .form-box button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #333A45;
            color: #939EAE;
            cursor: pointer;
            margin: 10px 0;
        }
        .form-box button:hover {
            background-color: #0069d9;
        }
        .form-title {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-box">
            <h2 class="form-title">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Sign In</button>
            </form>

        </div>
    </div>
</body>
</html>
