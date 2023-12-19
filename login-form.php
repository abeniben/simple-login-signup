<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel='stylesheet' href='Css/styles.css'>
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Log in</h3>
            <input type="email" name="email" placeholder="Enter your email"  required>
            <input type="password" name="password" placeholder="Enter your password"  required>
            <select name="user_type" >
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="Log in" class="register-btn">
            <p>Don't have an account? <a href="register-form.php">Register now</a></p>
        </form>
    </div>
</body>
</html>