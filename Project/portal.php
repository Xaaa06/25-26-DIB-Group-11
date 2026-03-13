<?php
session_start();

// redirect to login if not authenticated
// loginPage.php stores user_id in the session, so check that instead of `email`
if (!isset($_SESSION['user_id'])) {
    header('Location: loginPage.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Log in Portal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #253554;
        }

        /* Page Title */

        h1 {
            text-align: left;
            margin-top: 40px;
            margin-bottom: 40px;
            margin-left: 75px;
            font-size: 40px;
            color: aliceblue;
        }

        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
        }

        td {
            width: 25%;
            padding: 10px;
        }

        /* Portal Boxes */

        .box {
            background: #2f6fed;
            color: white;
            height: 180px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-radius: 10px;
            font-size: 20px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }

        .box:hover {
            background: #1f4fb5;
            transform: scale(1.05);
        }

        .large {
            height: 380px;
            font-size: 24px;
        }

        button{
            margin-left:75px; 
            padding:10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h1>Welcome back Assessor!</h1>
    <table>

        <tr>
            <td>
                <div class="box large">My Assigned Students</div>
            </td>

            <td>
                <div class="box large">Enter Assessment Marks</div>
            </td>

            <td rowspan="2">
                <div class="box large">View Internship Results</div>
            </td>

        </tr>
    </table>

    <a href="logout.php">
        <button>Log Out</button>
    </a>

</body>
</html>
