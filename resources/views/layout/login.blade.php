<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Learning - Sign In</title>
    <!-- Bootstrap 4 CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            background: url('https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?q=80&w=2073&auto=format&fit=crop') no-repeat center center fixed;
            background-size: cover;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            /* Dark overlay for readability */
            z-index: 0;
        }

        .login-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
            z-index: 1;
        }

        .login-card h2 {
            font-weight: 500;
            color: #333;
            margin-bottom: 10px;
        }

        .login-card p {
            color: #666;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .btn-social {
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-google {
            background: #fff;
            color: #444;
            border: 1px solid #ddd;
        }

        .btn-google:hover {
            background: rgb(228, 224, 224);
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .btn-facebook {
            background: #3b5998;
            color: #fff;
            border: none;
        }

        .btn-facebook:hover {
            background: #344e86;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .btn-social img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        @media (max-width: 576px) {
            .login-card {
                padding: 20px;
                margin: 15px;
            }
        }

        /* disabled facebook btn */
        .disabled-link {
            pointer-events: none;
            color: #999;
            text-decoration: none;
            cursor: not-allowed;
            opacity: 0.6;
        }

        
        .disabled-link:hover {
            color: #999;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="overlay"></div>
    <div class="login-card">
        <h2>Sign in</h2>
        <p>Sign in to start your language journey</p>
        <a href="{{ route('auth/google') }}" class="btn btn-social btn-google">
            <img src="https://www.google.com/favicon.ico" alt="Google Icon">
            Sign in with Google
        </a>
        <a href="{{ route('auth/facebook') }}" class="btn btn-social btn-facebook disabled-link">
            <img src="https://www.facebook.com/favicon.ico" alt="Facebook Icon">
            Sign in with Facebook (Developing)
        </a>
    </div>

    <!-- Bootstrap 4 JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>