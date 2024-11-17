<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/assets/css/style.css"> <!-- Add a reference to the CSS file -->
</head>
<body>
    <div class="container">
        <h2>Login</h2>

        <?php if (isset($error)): ?>
            <div class="alert alert-error"><?= $error; ?></div>
        <?php endif; ?>
        
        <form action="login/submit" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter Password" required>
            </div>

            <button type="submit" class="btn">Login</button>

            <p>Don't have an account? <a href="signup">Sign Up here</a></p>
        </form>
    </div>
</body>
</html>
