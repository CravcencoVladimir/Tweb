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

    // Смена изображений по кнопке
    const nextBtn = document.getElementById("next-image-btn");
    const container = document.getElementById("image-container");

    nextBtn.addEventListener("click", function () {
        fetch("/photo_buddism/get_image.php")

            .then(response => response.text())
            .then(src => {
                const img = document.createElement("img");
                img.src = src + "?t=" + new Date().getTime();
                img.alt = "Будда";
                img.style.maxWidth = "100%";
                img.style.display = "block";
                img.style.marginTop = "10px";

                container.innerHTML = "";
                container.appendChild(img);
            });
    });
});

