<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>

<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FindHire</title>
    <link rel="stylesheet" href="login.css"> 
</head>
<body>
    <div class="login-container">
        <h1>Login to FindHire</h1>
        <?php if (isset($_SESSION['message'])): ?>
            <p class="error-message"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
        <?php endif; ?>
        <form method="POST" action="core/handleForms.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" name="loginUserBtn">Login</button>
        </form>

        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </div>
</body>
</html>
