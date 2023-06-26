<!DOCTYPE html>
<html>

<head>
    <title>Book Library - Edit Book</title>
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
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            margin-top: 30px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #555;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #333;
        }

        p {
            font-size: 20px;
            line-height: 1.5;
            color: #333;
            margin-bottom: 20px;
        }

        a {
            color: #8959a9;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Book </h1>
        <form action="/EditBookFunction?id=<?= $params['id'] ?>" method="POST">
            <input type="text" name="title" placeholder="Name" value="<?php echo $params['title'] ?>" required><br>
            <input type="text" name="author" placeholder="Author" value="<?php echo $params['author'] ?>" required><br>
            <input type="text" name="genre" placeholder="Genre" value="<?php echo $params['genre'] ?>" required><br>
            <input type="text" name="bookcover" placeholder="Book Cover Image Link"
                value="<?php echo $params['bookcover'] ?>" required><br>
            <button type="submit">Edit Book</button>
        </form>
    </div>
</body>

</html>