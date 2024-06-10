<?php
session_start();

require_once "connect.php";
$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['studentUsername']) && isset($_POST['studentPassword'])) {
        $entered_username = $_POST['studentUsername'];
        $entered_password = $_POST['studentPassword'];

        $sql = "SELECT * FROM student WHERE studentUsername='$entered_username' AND studentPassword='$entered_password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['studentUsername'] = $row['studentUsername'];
            $_SESSION['studentID'] = $row['studentID'];
            header("Location: profile.php");
            exit;
        } else {
            $error = "Invalid username or password!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background-color: #fff;
        padding: 25px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 400px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    .input-field {
        margin-bottom: 5px;
    }

    label {
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #28a745; 
        color: #fff;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #218838;
    }
</style>

<body>
    <div class="container">
        <?php if(!empty($error)) { ?>
            <div><?php echo $error; ?></div>
        <?php } ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h2>Login</h2>
            <div class="input-field">
                <label for="studentUsername">Username:</label><br>
                <input type="text" id="studentUsername" name="studentUsername"><br>
            </div>
            <div class="input-field">
                <label for="studentPassword">Password:</label><br>
                <input type="password" id="studentPassword" name="studentPassword"><br>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
