<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="process.php" method="post">
            <h1>Login Form</h1>
            
            <div class="form__control">
                <input id="username" name="username" type="text" placeholder="Username">
                <small></small>
                <span></span>
            </div>

            <div class="form__control">
                <input id="email" name="email" type="email" placeholder="Email">
                <small></small>
                <span></span>
            </div>

            <div class="form__control">
                <input id="password" name="password" type="password" placeholder="Password">
                <small></small>
                <span></span>
            </div>

            <div class="form__control">
                <input id="confirm__password" name="confirm_password" type="password" placeholder="Confirm Password">
                <small></small>
                <span></span>
            </div>

            <input type="submit" value="Đăng ký" />

            <div class="signup__link">
                not a member? <a href="#">Signup</a>
            </div>
        </form>
    </div>
</body>
<script src="app.js"></script>
</html>
