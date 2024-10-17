<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verfication</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container d-flex flex-row justify-content-center align-items-center shadow-lg p-0" style="width: 50%;"> 
        <div class="form-con" style="width: 100%; height: 100%">
            
            <form action="Verification.php" class="rounded-end p-5 d-flex flex-column justify-content-center align-items-center" method="post">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="170" height="170"><path d="M16.53 9.78a.75.75 0 0 0-1.06-1.06L11 13.19l-1.97-1.97a.75.75 0 0 0-1.06 1.06l2.5 2.5a.75.75 0 0 0 1.06 0l5-5Z"></path><path d="m12.54.637 8.25 2.675A1.75 1.75 0 0 1 22 4.976V10c0 6.19-3.771 10.704-9.401 12.83a1.704 1.704 0 0 1-1.198 0C5.77 20.705 2 16.19 2 10V4.976c0-.758.489-1.43 1.21-1.664L11.46.637a1.748 1.748 0 0 1 1.08 0Zm-.617 1.426-8.25 2.676a.249.249 0 0 0-.173.237V10c0 5.46 3.28 9.483 8.43 11.426a.199.199 0 0 0 .14 0C17.22 19.483 20.5 15.461 20.5 10V4.976a.25.25 0 0 0-.173-.237l-8.25-2.676a.253.253 0 0 0-.154 0Z"></path></svg>
                <h1 class="text-center mb-5">OTP VERIFICATION</h1>
                
                <div class="container-fluid" style="display: flex; justify-content:space-evenly;">
                    <input type="text" class="containers m-3" name="digit_2"   oninput="validateNumberInput(event)" maxlength="1" style="text-align:center;" required>
                    <input type="text" class="containers m-3" name="digit_3"   oninput="validateNumberInput(event)" maxlength="1" style="text-align:center;" required>
                    <input type="text" class="containers m-3" name="digit_4"   oninput="validateNumberInput(event)" maxlength="1" style="text-align:center;" required>
                    <input type="text" class="containers m-3" name="digit_4"   oninput="validateNumberInput(event)" maxlength="1" style="text-align:center;" required>
                    <input type="text" class="containers m-3" name="digit_4"   oninput="validateNumberInput(event)" maxlength="1" style="text-align:center;" required>
                    <input type="text" class="containers m-3" name="digit_4"   oninput="validateNumberInput(event)" maxlength="1" style="text-align:center;" required>
                </div>
                <p id="message"></p>
                <br>
                <div class="buttons">
                <button type="submit" name="verify">VERIFY</button>
                <a href="login.php"><button type="button">CANCEL</button></a>
                </div>
            </form>
        </div>
    </div>
    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>

    function validateNumberInput(event) {
                // Get the value of the input field
                const inputField = event.target;
                const value = inputField.value;

                // Regular expression to allow only numbers
                const regex = /^[0-9]*$/;

                // Validate the input value against the regex
                if (!regex.test(value)) {
                    // Remove the last character if it's not a number
                    inputField.value = value.slice(0, -1);
                }
                const inputFieldlen = event.target;
                const maxLength = inputFieldlen.getAttribute('maxlength');
                const currentLength = inputFieldlen.value.length;

                // Check if the current length exceeds the maximum length
                if (currentLength >= maxLength) {
                    // Prevent additional input
                    inputFieldlen.value = inputFieldlen.value.slice(0, maxLength);
                }
            }

    </script>
</body>
</html>