<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f8fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 500px;
            background: #ffffff;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.15);
            padding: 25px;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .container:hover {
            box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.2);
            transform: translateY(-3px);
        }
        h1 {
            text-align: center;
            color: #333;
            font-size: 2rem;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-size: 15px;
            color: #444;
            display: block;
            margin-bottom: 7px;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 8px; /* Reduced from 6px */
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px; /* Reduced from 15px */
            background: #fefefe;
            transition: border-color 0.3s, box-shadow 0.3s;
            box-sizing: border-box; /* Added to prevent overflow */
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus {
            border-color: #1a73e8;
            box-shadow: 0px 0px 8px rgba(26, 115, 232, 0.3);
            outline: none;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            color: #fff;
            background-color: #1a73e8;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #155db2;
        }
        .error {
            color: #e63946;
            font-size: 13px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Register Now</h1>

        <!-- Display validation errors if any -->
        @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form with CSRF protection and proper route -->
        <form method="POST" action="{{ route('form.submit') }}">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" value="{{ old('age') }}" min="1" required>
                @error('age')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>