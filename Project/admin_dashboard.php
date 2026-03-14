<?php
session_start();

// redirect to login if not authenticated
if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit();
}
// redirect to main if not an admin
if (strtolower($_SESSION['role'] ?? '') !== 'admin') {
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

    <h1 class="admin-role"> Role: <?php echo htmlspecialchars(ucfirst(strtolower($_SESSION['role'] ?? 'user'))); ?> </h1>
    <table class="dashboard-table">
        <tr>
            <td class="dashboard-td">
                <a href="manage.php" style="text-decoration: none;">
                    <div class="dashboard-box">Manage Students</div>
                </a>
            </td>

            <td class="dashboard-td">
                <a href="assessors.php" style="text-decoration: none;">
                    <div class="dashboard-box">Manage Assessors</div>
                </a>
            </td>

            <td class="dashboard-td">
                <a href="results.php" style="text-decoration: none;">
                    <div class="dashboard-box">View Internship Results</div>
                </a>
            </td>

        </tr>
        <tr>
            <td class="dashboard-td">
                <a href="internships.php" style="text-decoration: none;">
                    <div class="dashboard-box">Manage Internships</div>
                </a>
            </td>
        </tr>
    </table>

</body>
</html>