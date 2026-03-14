<?php
session_start();

// redirect to login if not authenticated
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
// redirect to main if not an assessor
if (strtolower($_SESSION['role'] ?? '') !== 'assessor') {
    header('Location: main.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log in Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="style.js"></script>

</head>

<body class="background">
<!-- navbar with logout button ONLY (currently 13/3/26, JUN) -->
    <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #000000;">
        <div class="container-fluid">
            <a class="navbar-brand" href="main.php" style="font-family: 'Times New Roman', serif; font-weight: bold; font-size: 26px;">
                DIB Group 11
            </a>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav ms-auto mt-2">
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php" style="font-family: 'Times New Roman', serif; font-weight: bold; font-size: 26px; color: #DAA520;">
                            Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>