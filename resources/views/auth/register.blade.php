
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | AI Builds My Website</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f3fc;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 440px;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0,0,0,.07);
        }

        h1 { color: #5140b5; margin-bottom: 8px; }
        .subtitle { color: #777; margin-bottom: 25px; }

        label {
            display: block;
            margin: 16px 0 8px;
            font-weight: bold;
            font-size: 14px;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 15px;
        }

        input:focus {
            outline: 2px solid #7864d8;
            border-color: transparent;
        }

        button {
            width: 100%;
            padding: 14px;
            margin-top: 25px;
            border: none;
            background: #5b49c5;
            color: white;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover { background: #4634a8; }

        .footer {
            text-align: center;
            margin-top: 22px;
            color: #777;
        }

        a { color: #5b49c5; text-decoration: none; }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 6px;
        }

        .alert {
            background: #fee2e2;
            color: #991b1b;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>Create Account ✨</h1>
    <p class="subtitle">Start building your business website with AI.</p>

    @if ($errors->any())
        <div class="alert">
            Please correct the errors below.
        </div>
    @endif

    <form method="POST" action="{{ route('register.store') }}">
        @csrf

        <label>Full Name</label>
        <input type="text" name="name"
               value="{{ old('name') }}"
               placeholder="Enter your name" required>
        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Email Address</label>
        <input type="email" name="email"
               value="{{ old('email') }}"
               placeholder="Enter your email" required>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Password</label>
        <input type="password" name="password"
               placeholder="Minimum 8 characters" required>
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <label>Confirm Password</label>
        <input type="password" name="password_confirmation"
               placeholder="Confirm your password" required>

        <button type="submit">Create Account</button>
    </form>

    <div class="footer">
        Already have an account?
        <a href="{{ route('login') }}">Login</a>
    </div>

</div>

</body>
</html>
