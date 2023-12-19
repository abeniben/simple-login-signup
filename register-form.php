<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel='stylesheet' href='Css/styles.css'>
</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>Register now</h3>
            <input type="text" name="name" placeholder="Enter your name"  required>
            <input type="email" name="email" placeholder="Enter your email"  required>
            <input type="password" name="password" placeholder="Enter your password"  required>
            <input type="password" name="cpassword" placeholder="Confirm your password"  required>
            <select name="user_type" >
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="submit" name="submit" value="Register" class="register-btn">
            <p>Already have an account? <a href="login-form.php">Log in</a></p>
        </form>
    </div>
</body>
</html>