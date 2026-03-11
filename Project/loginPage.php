<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>University Internship Result Management Portal</title>
    <style>
        body {
            background: url("homepageBackground.jpg");
            font-family: 'Playfair Display', serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .container {
            margin-top: 100px;
            width: 80%;
            max-width: 450px;
            margin: 100px auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #00265b;
            font-size: 32px;
            margin-bottom: 30px;
        }

        input, button {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        button {
            background-color: #00274e;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #08009a;
        }

        .cancel-btn {
            background-color: #bbb;
            margin-top: 10px;
        }

        .cancel-btn:hover {
            background-color: #999;
        }

        .input-container {
            margin-top: 30px;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            color: white;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>University Internship Result Portal</h2>
    <!-- Login Form -->
    <div id="loginContainer">
        <form id="loginForm" method="POST">
            <div class="input-container">
                <input type="email" name="email" placeholder="Enter Email Address" required>
                <input type="password" name="password" placeholder="Enter Password" required>
            </div>
            <button type="submit">Log In</button>
            <button type="button" class="cancel-btn" onclick="cancelLogin()">Cancel</button>
        </form>
    </div>
</div>

<footer>
    <p>© 2026 Internship Result Management System</p>
</footer>

<script>

function validateLogin() {
    const form = document.getElementById("loginForm");

    if (form.checkValidity()) {
        alert("Login Successful!");
        return true;
    } else {
        alert("Please fill in all required fields!");
        return false;
    }
}
function cancelLogin() {
    const form = document.getElementById("loginForm");
    form.reset();
    alert("Login cancelled.");
}
</script>
</body>
</html>
