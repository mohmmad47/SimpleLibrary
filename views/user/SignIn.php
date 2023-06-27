<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign In</title>
</head>

<body>
    <div class="container-w400">
        <h1>Sign In</h1>
        <form action="/home" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log in</button>
        </form>
        <p>Don't have an account? <a href="/signup">Sign Up</a></p>
    </div>
</body>

</html>