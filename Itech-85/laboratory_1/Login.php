<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container d-flex flex-row justify-content-center align-items-center shadow-lg p-0">
        <img src="img/preview.jpg" class="rounded-start" alt="security-img" width="50%" height="auto">
        <div class="form-con rounded-end d-flex flex-column justify-content-center" style="height: 100%; width: 50%;">
            <form action="sign_up.php" class="rounded-end p-5 d-flex flex-column justify-content-center" method="post">
                <h1>LOGIN</h1>
                <br>
                <div class="input">
                <input type="text" placeholder="Email" name="Email">
                <span></span>
                </div>
                <br>
                <div class="input">
                <input type="password" placeholder="Password" name="Password">
                <span></span>
                </div>
                <p id="message"></p>
                <br>
                <button type="submit" name="signin">LOGIN</button>
                <br>
                <p>Don't have Account? <a href="Sign_up.php">Sign up</a></p>
            </form>
            
        </div>
    </div>
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>