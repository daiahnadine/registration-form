<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT PORTAL</title>
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
            margin-bottom: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        input[type="submit"] {
            width: 50%;
            padding: 10px;
            border: none;
            margin-bottom: 10px;
            margin-left: 100px;
            border-radius: 5px;
            background-color: #28a745; 
            color: #fff;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1>STUDENT PORTAL</h1>
        <div class="buttons">
            <form method="post" action="login.php">
                <input type="submit" name="login" value="Login">
            </form>
            <form method="post" action="index.php">
                <input type="submit" name="create_account" value="Create Account">
            </form>
        </div>
    </div>
</body>
</html>
