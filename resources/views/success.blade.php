<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Success</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            max-width: 600px; 
            margin: 0 auto; 
            padding: 20px; 
        }
        h1 { 
            font-size: 24px; 
            margin-bottom: 20px; 
        }
        .data-group { 
            margin-bottom: 15px; 
        }
        strong { 
            display: inline-block; 
            margin-bottom: 5px; 
            font-weight: bold; 
        }
        p {
            margin: 0;
            padding: 8px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            background-color: #f9f9f9;
        }
        a { 
            display: inline-block;
            padding: 8px 16px; 
            background-color: #007bff; 
            color: white; 
            border: none; 
            text-decoration: none; 
            cursor: pointer; 
        }
        a:hover { 
            background-color: #0056b3; 
        }
    </style>
</head>
<body>
    <h1>Submission Success!</h1>
    <div class="data-group">
        <strong>Name:</strong>
        <p>{{ $data['name'] }}</p>
    </div>
    <div class="data-group">
        <strong>Email:</strong>
        <p>{{ $data['email'] }}</p>
    </div>
    <div class="data-group">
        <strong>Age:</strong>
        <p>{{ $data['age'] }}</p>
    </div>
    <a href="{{ route('form.show') }}">Back to Form</a>
</body>
</html>