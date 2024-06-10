<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
</head>
<body>

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
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
}

h2 {
    text-align: center;
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
}

.input-group {
    display: flex;
    justify-content: space-between;
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

select {
    appearance: none;
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
<div class="container">
    <h2>Student Registration Form</h2>
    <form action="register.php" method="post">
        <div class="input-group">
            <div class="input-field">
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="input-field">
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="input-field">
                <label for="middleName">Middle Name:</label>
                <input type="text" id="middleName" name="middleName" required>
            </div>

        </div>
        <div class="input-field">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="input-field">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
        <div class="input-field">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="input-field">
                <label for="contactNumber">Contact Number:</label>
                <input type="text" id="contactNumber" name="contactNumber" required>
            </div>
            <div class="input-field">
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday" required>
            </div>
            <div class="input-field">
                <label for="age">Age:</label>
                <input type="text" id="age" name="age" required>
            </div>
            <div class="input-field">
                <label for="religion">Religion:</label>
                <input type="text" id="religion" name="religion" required>
            </div>
            <div class="input-field">
                <label for="yearLevel">Year:</label>
                <input type="text" id="yearLevel" name="yearLevel" required>
            </div>
        <div class="input-field">
            <label for="studentId">Student ID:</label>
            <input type="text" id="studentId" name="studentId" required>
        </div>
        <div class="input-field">
            <label for="studentUsername">Username:</label>
            <input type="text" id="studentUsername" name="studentUsername" required>
        </div>
        <div class="input-field">
            <label for="studentPassword">Password:</label>
            <input type="password" id="studentPassword" name="studentPassword" required>
        </div>
        <div class="input-field">
            <label for="confirmPassword">Confirm password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
        </div>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
