<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
    <h2>Create an Account</h2>

    <!-- Display flash messages (errors or success) -->
    <?php if (isset($error) && $error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <?php if (isset($success) && $success): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form action="/signup/submit" method="POST">
        <label>Username:</label>
        <input type="text" name="username" placeholder="Username" required>
        
        <label>Email:</label>
        <input type="email" name="email" placeholder="Email" required>
        
        <label>Password:</label>
        <input type="password" name="password" placeholder="Password" required>
        
        <label>Confirm Password:</label>
        <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
        
        <button type="submit">Sign Up</button>
    </form>

    <p>Already have an account? <a href="/login">Log in here</a>.</p>
</body>
</html>
