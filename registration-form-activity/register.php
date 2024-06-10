<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "firstconnection";
    $conn = new mysqli($servername, $username, $password, $database);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $studentId = $_POST["studentId"];
        $lastName = $_POST["lastName"];
        $firstName = $_POST["firstName"];
        $middleName = $_POST["middleName"];
        $address = $_POST["address"];
        $gender = $_POST["gender"];
        $contactNumber = $_POST["contactNumber"];   
        $email = $_POST["email"];
        $birthday = $_POST["birthday"];
        $age = $_POST["age"];
        $religion = $_POST["religion"];
        $yearLevel = $_POST["yearLevel"];
        $studentUsername = $_POST["studentUsername"];
        $studentPassword = $_POST["studentPassword"];
        $confirmPassword = $_POST["confirmPassword"];
        
        if($studentPassword !== $confirmPassword) {
            echo "Please check if you have entered the same password.";
            exit;
        }

        $check = "SELECT * FROM student WHERE studentUsername='$studentUsername' OR email='$email'";
        $result = mysqli_query($conn, $check);
        if (mysqli_num_rows($result) > 0) {
            echo "Username or email already exists.";
            exit; 
        }

        $insert = "INSERT INTO student (studentID, lastName, firstName, middleName, address, gender, contactNumber, email,
        birthday, age, religion, yearLevel, studentUsername, studentPassword) VALUES ('$studentId', '$lastName', '$firstName', '$middleName', '$address', '$gender',
        '$contactNumber', '$email', '$birthday', '$age', '$religion', '$yearLevel', '$studentUsername', '$studentPassword')";
        
        if(mysqli_query($conn, $insert)) {
            echo "Record inserted successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        $_SESSION["studentId"] = $studentId;
        echo "<script>alert('SIGN UP COMPLETE!');
        window.location = 'profile.php';</script>";
    }

    $conn->close();
?>
