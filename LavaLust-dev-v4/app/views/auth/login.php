<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <!-- Display flash messages (errors or success) -->
    <?php if (isset($error) && $error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <?php if (isset($success) && $success): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form action="/login/submit" method="POST">
        <label>Email:</label>
        <input type="email" name="email" placeholder="Email" required>
        
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" required>
        
        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="/signup">Sign up here</a>.</p>
</body>
</html>
