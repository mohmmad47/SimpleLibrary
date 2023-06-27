<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles.css">
    <title>Book Library - Edit Book</title>
</head>

<body>
    <div class="container-w400">
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