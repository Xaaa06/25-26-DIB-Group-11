<?php
session_start();

// redirect to login if not authenticated 
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

$fullName = $_SESSION['full_name'] ?? 'User';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <!--Connect to external website for styling (unique solution maybe :/, JUN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="style.js"></script>
</head>

<body class="background">
    <!-- navbar with logout button ONLY (13/3/26, JUN) -->
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
    <div class="main-title">
        <!--I was thinking maybe first name is enough here, but we don't have
        parameter for first name currently. Flagged (13/3/26, JUN) -->
        Welcome back, <?php echo htmlspecialchars($fullName); ?>!
    </div>

    <div class="button-wrap">
        <?php
            $role = strtolower($_SESSION['role'] ?? '');
            if ($role === 'admin') {
                $dashboard = 'admin_dashboard.php';
            } elseif ($role === 'assessor') {
                $dashboard = 'assessor_dashboard.php';
            } else {
                $dashboard = 'index.php';
            }
        ?>
        <form action="<?php echo htmlspecialchars($dashboard); ?>" method="get">
            <button class="main-redirect">Start your job here!</button>
        </form>
    </div>

    <div class="main-bridge">
        <img src="/static/bridge.png" class="center-bridge" alt="Bridge Image">
    </div>
</body>
</html>