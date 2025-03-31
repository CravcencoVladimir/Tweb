document.addEventListener("DOMContentLoaded", function () {
    const themeToggle = document.getElementById("theme-toggle");
    const body = document.body;

    function updateButtonText() {
        themeToggle.textContent = body.classList.contains("dark-mode") ? "Light Theme" : "Black Theme";
    }

    if (localStorage.getItem("theme") === "dark") {
        body.classList.add("dark-mode");
        updateButtonText();
    }

    themeToggle.addEventListener("click", function () {
        body.classList.toggle("dark-mode");
        localStorage.setItem("theme", body.classList.contains("dark-mode") ? "dark" : "light");
        updateButtonText();
    });
});
