<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
</head>
<body>
           <h2>Registration Form</h2>
        <form method="post">
            <div>
                <label for="fullname">Full Name:</label>
                <input type="text"name="name">
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" name="password">
            </div>
            <div>
                <label for="confirm-password">Confirm Password:</label>
                <input type="password" name="confirm-password">
            </div>
            <button type="submit">Register</button>
            <a href="logout.php">Logout</a>
        </form>
</body>
</html>