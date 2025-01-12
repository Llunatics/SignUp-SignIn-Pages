const passwordToggle = document.querySelector(".password-toggle"),
    passwordInput = document.querySelector(".password"),
    confirmToggle = document.querySelector(".confirm-toggle"),
    confirmInput = document.querySelector(".confirm-password");

passwordToggle.addEventListener("click", () => {
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.classList.replace("fa-eye", "fa-eye-slash");
    } else {
        passwordInput.type = "password";
        passwordToggle.classList.replace("fa-eye-slash", "fa-eye");
    }
});

confirmToggle.addEventListener("click", () => {
    if (confirmInput.type === "password") {
        confirmInput.type = "text";
        confirmToggle.classList.replace("fa-eye", "fa-eye-slash");
    } else {
        confirmInput.type = "password";
        confirmToggle.classList.replace("fa-eye-slash", "fa-eye");
    }
});
