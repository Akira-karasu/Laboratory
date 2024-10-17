<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container d-flex flex-row justify-content-center align-items-center shadow-lg p-0">
        <img src="img/preview.jpg" class="rounded-start" alt="security-img" width="50%" height="auto">
        <div class="form-con rounded-end d-flex flex-column justify-content-center" style="height: 100%; width: 50%;">
            <form action="sign_up.php" class="rounded-end p-5 d-flex flex-column justify-content-center" method="post">
                <h1>SIGN UP</h1>
                <br>
                <div class="input">
                <input type="text" placeholder="Enter your Email" name="Email">
                <span></span>
                </div>
                <br>
                <div class="input">
                <input type="password" placeholder="Enter your Password" id="password" name="password">
                <span></span>
                </div>
                <p id="message"></p>
                <br>
                <button type="submit" name="signin">SIGN UP</button>
                <br>
                
            </form>
            <p><a href="Login.php" class="p-4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16"><path d="M7.78 12.53a.75.75 0 0 1-1.06 0L2.47 8.28a.75.75 0 0 1 0-1.06l4.25-4.25a.751.751 0 0 1 1.042.018.751.751 0 0 1 .018 1.042L4.81 7h7.44a.75.75 0 0 1 0 1.5H4.81l2.97 2.97a.75.75 0 0 1 0 1.06Z"></path></svg>
                Go back to Login
            </a></p>
        </div>
    </div>
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>