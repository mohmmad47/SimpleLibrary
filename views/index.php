<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            text-decoration: none;
            background-color: #555;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }

        .button:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome to the Home Page</h1>
        <button class="button" onclick="location.href='/signin'">Sign In</button>
        <button class="button" onclick="location.href='/signup'">Sign Up</button>
    </div>
</body>

</html>