<?php
session_start();
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT user_id, full_name, role FROM users WHERE email = ? AND password = ?");

    if ($stmt) {
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['role'] = $user['role'];

            // send user to main page
            header("Location: main.php");
            exit();
        } else {
            $message = "Invalid email or password!";
        }

        $stmt->close();
    } else {
        $message = "Database query error.";
    }
}

$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>University Internship Result Management Portal</title>
    <style>
        body {
            background: url("/static/homepageBackground.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Playfair Display', serif;
            margin: 0;
            padding: 0;
            color: #333;
            min-height: 100vh;
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
            box-sizing: border-box;
        }

        button {
            background-color: #00274e;
            color: white;
            cursor: pointer;
            border: none;
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

        .message {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>University Internship Result Portal</h2>
    <?php if ($message): ?>
        <div class="message <?php echo strpos($message, 'successful') !== false ? 'success' : 'error'; ?>">
            <?php echo htmlspecialchars($message); ?>
        </div>
    <?php endif; ?>

    <div id="loginContainer">
        <form id="loginForm" method="post" action="">
            <div class="input-container">
                <input type="email" id="email" name="email" placeholder="Enter Email Address" required>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
            </div>
            <button type="submit">Log In</button>
            <button type="button" class="cancel-btn" onclick="cancelLogin()">Cancel</button>
        </form>
    </div>
</div>

<script>
function cancelLogin() {
    const form = document.getElementById("loginForm");
    form.reset();
    alert("Login cancelled.");
}
</script>
</body>
</html>