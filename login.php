<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Вход</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f0f0f0; display: flex; justify-content: center; align-items: center; height: 100vh; }
    form { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    input { display: block; width: 100%; margin-bottom: 10px; padding: 8px; }
    button { padding: 10px; background: #28a745; color: white; border: none; cursor: pointer; }
    #error { color: red; margin-top: 10px; }
  </style>
</head>
<body>
  <form id="loginForm">
    <h2>Вход</h2>
    <input type="text" id="username" placeholder="Логин" required>
    <input type="password" id="password" placeholder="Пароль" required>
    <button type="submit">Войти</button>
    <div id="error"></div>
  </form>

  <script>
    document.getElementById("loginForm").addEventListener("submit", function(e) {
      e.preventDefault();
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "auth.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

      var username = encodeURIComponent(document.getElementById("username").value);
      var password = encodeURIComponent(document.getElementById("password").value);

      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
          if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
              window.location.href = "index.php";
            } else {
              document.getElementById("error").textContent = response.message;
            }
          }
        }
      };

      xhr.send("username=" + username + "&password=" + password);
    });
  </script>
</body>
</html>
