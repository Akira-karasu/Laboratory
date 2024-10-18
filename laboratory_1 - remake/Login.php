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

    <div class="container d-flex flex-row justify-content-center shadow-lg rounded p-0">
        <img src="img/preview.jpg" alt="securifty_img" class="rounded-start" width="50%" height="auto">
        <div class="form_con flex-grow-1 p-5 d-flex flex-column justify-content-center rounded-end">
            <form action="login.php" method="post">
                <h1>LOGIN</h1>
                <br>
                <div>
                <input type="text" placeholder="Email" name="email">
                <span></span>
                </div>
                <br>
                <div class="inp-con">
                <input type="password" placeholder="Password" name="password">
                <span></span>
                </div>
                <p id="message"></p>
                <br>
                <button type="submit" name="login">LOGIN</button>
            </form>
            <br>
            <p>Don't have Account? <a href="Sign_up.php">Sign up</a></p>
        </div>
    </div>



    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>