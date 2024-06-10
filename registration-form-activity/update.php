<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "firstconnection";
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $studentId = $_SESSION["studentId"];
    $fieldsToUpdate = array();

    if (isset($_POST['firstName'])) {
        $newFirstName = $_POST["newFirstName"];
        if (!empty($newFirstName)) {
            $fieldsToUpdate[] = "firstName='$newFirstName'";
        }
    }

    if (isset($_POST['lastName'])) {
        $newLastName = $_POST["newLastName"];
        if (!empty($newLastName)) {
            $fieldsToUpdate[] = "lastName='$newLastName'";
        }
    }

    if (isset($_POST['middleName'])) {
        $newMiddleName = $_POST["newMiddleName"];
        if (!empty($newMiddleName)) {
            $fieldsToUpdate[] = "middleName='$newMiddleName'";
        }
    }

    if (isset($_POST['address'])) {
        $newAddress = $_POST["newAddress"];
        if (!empty($newAddress)) {
            $fieldsToUpdate[] = "address='$newAddress'";
        }
    }

    if (isset($_POST['gender'])) {
        $newGender = $_POST["newGender"];
        if (!empty($newGender)) {
            $fieldsToUpdate[] = "gender='$newGender'";
        }
    }

    if (isset($_POST['contactNumber'])) {
        $newContactNumber = $_POST["newContactNumber"];
        if (!empty($newContactNumber)) {
            $fieldsToUpdate[] = "contactNumber='$newContactNumber'";
        }
    }

    if (isset($_POST['email'])) {
        $newEmail = $_POST["newEmail"];
        if (!empty($newEmail)) {
            $fieldsToUpdate[] = "email='$newEmail'";
        }
    }

    if (isset($_POST['age'])) {
        $newAge = $_POST["newAge"];
        if (!empty($newAge)) {
            $fieldsToUpdate[] = "age='$newAge'";
        }
    }

    if (isset($_POST['religion'])) {
        $newReligion = $_POST["newReligion"];
        if (!empty($newReligion)) {
            $fieldsToUpdate[] = "religion='$newReligion'";
        }
    }

    if (isset($_POST['yearLevel'])) {
        $newYearLevel = $_POST["newYearLevel"];
        if (!empty($newYearLevel)) {
            $fieldsToUpdate[] = "yearLevel='$newYearLevel'";
        }
    }

    if (isset($_POST['studentUsername'])) {
        $newStudentUsername = $_POST["newStudentUsername"];
        if (!empty($newStudentUsername)) {
            $fieldsToUpdate[] = "studentUsername='$newStudentUsername'";
        }
    }

    if (isset($_POST['studentPassword'])) {
        $newStudentPassword = $_POST["newStudentPassword"];
        if (!empty($newStudentPassword)) {
            $fieldsToUpdate[] = "studentPassword='$newStudentPassword'";
        }
    }

    $updateFields = implode(", ", $fieldsToUpdate);
    if (!empty($updateFields)) {
        $sql = "UPDATE student SET $updateFields WHERE studentId='$studentId'";

        if ($conn->query($sql) === TRUE) {
            echo "Information updated successfully";
        } else {
            echo "Error updating information: " . $conn->error;
        }
    } else {
        echo "No fields selected for update";
    }

    $_SESSION["studentId"] = $studentId;
    echo "<script>alert('UPDATE SUCCESSFUL!');
    window.location = 'profile.php';</script>";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Information</title>
</head>

<style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            margin-left: 200px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
</style>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h2>Update Information</h2>
        <label for="firstName">First Name:</label>
        <input type="checkbox" name="firstName"> Change First Name<br><br>
        <input type="text" name="newFirstName" placeholder="New First Name"><br><br>
        
        <label for="lastName">Last Name:</label>
        <input type="checkbox" name="lastName"> Change Last Name<br><br>
        <input type="text" name="newLastName" placeholder="New Last Name"><br><br>

        <label for="middleName">Middle Name:</label>
        <input type="checkbox" name="middleName" value="newMiddleName"> Change Middle Name<br><br>
        <input type="text" name="newMiddleName" placeholder="New Middle Name"><br><br>

        <label for="address">Address:</label>
        <input type="checkbox" name="address" value="newAddress"> Change Address<br><br>
        <input type="text" name="newAddress" placeholder="New Address"><br><br>

        <label for="gender">Gender:</label>
        <input type="checkbox" name="gender" value="newGender"> Change Gender<br><br>
        <input type="text" name="newGender" placeholder="New Gender"><br><br>

        <label for="contactNumber">Contact Number:</label>
        <input type="checkbox" name="contactNumber" value="newContactNumber"> Change Contact Number<br><br>
        <input type="text" name="newContactNumber" placeholder="New Contact Number"><br><br>

        <label for="email">Email:</label>
        <input type="checkbox" name="email" value="newEmail"> Change Email<br><br>
        <input type="text" name="newEmail" placeholder="New Email"><br><br>

        <label for="age">Age:</label>
        <input type="checkbox" name="age" value="newAge"> Change Age<br><br>
        <input type="text" name="newAge" placeholder="New Age"><br><br>

        <label for="religion">Religion:</label>
        <input type="checkbox" name="religion" value="newReligion"> Change Religion<br><br>
        <input type="text" name="newReligion" placeholder="New Religion"><br><br>

        <label for="yearLevel">Year Level:</label>
        <input type="checkbox" name="yearLevel" value="newYearLevel"> Change Year Level<br><br>
        <input type="text" name="newYearLevel" placeholder="New YearLevel"><br><br>

        <label for="studentUsername">Username:</label>
        <input type="checkbox" name="studentUsername" value="newStudentUsername"> Change Username<br><br>
        <input type="text" name="newStudentUsername" placeholder="New Username"><br><br>

        <label for="studentPassword">Password:</label>
        <input type="checkbox" name="studentPassword" value="newStudentPassword"> Change Password<br><br>
        <input type="text" name="newPassword" placeholder="New Password"><br><br>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="checkbox" name="confirmPassword" value="newConfirmPassword"> Change Password<br><br>
        <input type="text" name="newPassword" placeholder="New Password"><br><br>

        <input type="submit" value="Update">
    </form>
</body>
</html>
