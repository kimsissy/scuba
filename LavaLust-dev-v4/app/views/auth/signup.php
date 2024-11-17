<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="/assets/css/style.css"> <!-- Add a reference to the CSS file -->
</head>
<body>
    <div class="container">
        <h2>Create an Account</h2>

        <?php if (isset($error)): ?>
            <div class="alert alert-error"><?= $error; ?></div>
        <?php endif; ?>
        
        <form action="signup/submit" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Enter Username" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Enter Email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Enter Password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <button type="submit" class="btn">Sign Up</button>

            <p>Already have an account? <a href="login">Login here</a></p>
        </form>
    </div>
</body>
</html>
