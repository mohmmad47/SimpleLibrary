<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class="container">
        <div class="header">
            <h1>BooksMania</h1>
            <div>
                <button class="btn" onclick="location.href='/addnewbook'">Add New Book</button>
                <button class="btn" onclick="location.href='/logout'">Logout </button>
            </div>
        </div>
        <div class="card-container">
            <?php foreach ($params as $book): ?>
                <div class="card">
                    <img src="<?php echo $book['bookcover']; ?>" alt="<?php echo $book['title']; ?>">
                    <div class="card-content">
                        <h3>
                            <?php echo $book['title']; ?>
                        </h3>
                        <p><strong>Author:</strong>
                            <?php echo $book['author']; ?>
                        </p>
                        <p><strong>Genre:</strong>
                            <?php echo $book['genre']; ?>
                        </p>
                    </div>
                    <div>
                        <button class="card-btn" onclick="location.href='/Editbook?id=<?= $book['id'] ?>'">Edit
                            Book</button>
                        <button class="card-btn" onclick="location.href='/Deletebook?id=<?= $book['id'] ?>'">Delete
                            Book</button>

                    </div>


                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>


</html>