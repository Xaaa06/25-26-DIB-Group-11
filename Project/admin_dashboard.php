<?php
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
    </head>

    <body>

        <h1>Admin Dashboard</h1>
        <p>Welcome Admin!</p>

        <nav>
            <ul>
                <li><a href="manage_students.php">Manage Students</a></li>
                <li><a href="manage_assessors.php">Manage Assessors</a></li>
                <li><a href="manage_internships.php">Manage Internships</a></li>
                <li><a href="view_results.php">View Results</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>

    </body>
</html>