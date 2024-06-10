<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
            margin-bottom: 70px;
            width: 600px;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }  

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .profile-item {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .profile-item label {
            width: 120px;
            font-weight: bold;
        }
        
        .profile-item span {
            flex: 1;
        }
        
        .buttons {
            display: flex;
            padding: 5px;
            padding-top: 5px;
            padding-bottom: 0px;
            margin-left: 150px;
            margin-right: 200px;
            justify-content: space-between;
        }

        button#updateBtn:hover {
            background-color: #218838;
        }

        button#updateBtn {
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

        input[type="submit"] {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: #fff;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="container">
        <h2>YOUR ACCOUNT</h2>


        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "firstconnection";
        $conn = new mysqli($servername, $username, $password, $database);

        session_start();
        $studentId = $_SESSION["studentId"];

        $sql = "SELECT * FROM student WHERE studentId = '$studentId'";
        $run = mysqli_query($conn, $sql);
        if (mysqli_num_rows($run) > 0) {
            $row = mysqli_fetch_assoc($run);
        ?>


        <div class="profile-item">
            <label>Student ID:</label>
            <span><?php echo $row['studentId']; ?></span>
        </div>

        <div class="profile-item">
            <label>First Name:</label>
            <span><?php echo $row['firstName']; ?></span>
        </div>

        <div class="profile-item">
            <label>Last Name:</label>
            <span><?php echo $row['lastName']; ?></span>
        </div>

        <div class="profile-item">
            <label>Middle Name:</label>
            <span><?php echo $row['middleName']; ?></span>
        </div>

        <div class="profile-item">
            <label>Gender:</label>
            <span><?php echo $row['gender']; ?></span>
        </div>

        <div class="profile-item">
            <label>Address:</label>
            <span><?php echo $row['address']; ?></span>
        </div>

        <div class="profile-item">
            <label>Email:</label>
            <span><?php echo $row['email']; ?></span>
        </div>

        <div class="profile-item">
            <label>Contact Number:</label>
            <span><?php echo $row['contactNumber']; ?></span>
        </div>

        <div class="profile-item">
            <label>Birthday:</label>
            <span><?php echo $row['birthday']; ?></span>
        </div>

        <div class="profile-item">
            <label>Age:</label>
            <span><?php echo $row['age']; ?></span>
        </div>

        <div class="profile-item">
            <label>Religion:</label>
            <span><?php echo $row['religion']; ?></span>
        </div>

        <div class="profile-item">
            <label>Year Level:</label>
            <span><?php echo $row['yearLevel']; ?></span>
        </div>

        <div class="buttons">
            <button id="updateBtn" onclick="location.href='update.php';">Update Information</button>

            <form method="post" action="homepage.php">
                <input type="submit" name="logout" value="Logout">
            </form>
        </div>

        <?php
        } else {
            echo "No user found with ID: $studentId";
        }
        ?>
    </div>
</body>
</html>
