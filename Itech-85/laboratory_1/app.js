const pass = document.getElementById("password");
const msg = document.getElementById("message");

const regexes = {
    uppercase: /[A-Z]/,
    digit: /\d/,
    specialChar: /[!@#$%^&*()_+=[\]{};':"\\|,.<>?~-]/,
    length: /.{8,}/
};

pass.addEventListener("input", () => {
    msg.style.display = pass.value.length > 0 ? "block" : "none";

 
    if (!regexes.uppercase.test(pass.value) || !regexes.digit.test(pass.value) || !regexes.specialChar.test(pass.value) || !regexes.length.test(pass.value)) {
        msg.innerHTML = "Input your password atleast 8 characters, 1 uppercase, 1 digit, and 1 scpecial character";
        msg.style.color = "red";
    }
    else {
        msg.innerHTML = "Password is Secured"; // Clear message if all criteria are met
        msg.style.color = "green";
    }
});


