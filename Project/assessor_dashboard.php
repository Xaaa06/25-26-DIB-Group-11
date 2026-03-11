<?php
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'assessor'){
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Assessor Dashboard</title>
    </head>

    <body>
        <h1>Assessor Dashboard</h1>
        <p>Welcome Assessor!</p>
        <nav>
            <ul>
                <li><a href="view_assigned_students.php">My Assigned Students</a></li>
                <li><a href="enter_marks.php">Enter Assessment Marks</a></li>
                <li><a href="view_results.php">View Results</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </body>
</html>