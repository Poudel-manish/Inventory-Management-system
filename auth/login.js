// Toggle password visibility
function togglePasswordVisibility() {
  const passwordInput = document.getElementById("password");
  const toggleIcon = document.querySelector(".password-toggle i");

  if (passwordInput.type === "password") {
    passwordInput.type = "text";
    toggleIcon.classList.remove("fa-eye");
    toggleIcon.classList.add("fa-eye-slash");
  } else {
    passwordInput.type = "password";
    toggleIcon.classList.remove("fa-eye-slash");
    toggleIcon.classList.add("fa-eye");
  }
}

// Form submission loading spinner
document.querySelector("form").addEventListener("submit", function (e) {
  const button = document.querySelector(".login-button");
  button.classList.add("loading");
  button.disabled = true;
});
