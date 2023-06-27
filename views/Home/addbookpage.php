<!DOCTYPE html>
<html>

<head>
    <title>Book Library - Add Book</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container-w400">
        <h1>Add Book</h1>
        <form action="/NewBookFunction" method="POST">
            <input type="text" name="title" placeholder="Name" required><br>
            <input type="text" name="author" placeholder="Author" required><br>
            <input type="text" name="genre" placeholder="Genre" required><br>
            <input type="text" name="bookcover" placeholder="Book Cover Image Link" required><br>
            <button type="submit">Add Book</button>
        </form>
    </div>
</body>

</html>