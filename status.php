<?php
require_once "connectdb.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $applicationID = isset($_POST['applicationID']) ? trim($_POST['applicationID']) : '';

    $sql = "SELECT * FROM society WHERE applicationID = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $applicationID);

        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Your application is under process.');</script>";
        } else {
            echo "<script>alert('Invalid application ID. Please try again.');</script>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }

    mysqli_close($conn);
}
?>



<!DOCTYPE html>
<html>

<head>
    <title>Application Status</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        

        .header {
            font-family: 'Oswald';
            color: #393232;
            position: absolute;
            top: 0;
            background-color: #f1f1f1;
            padding: 20px;
            width: 100%;
            text-align: center;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-group .btn {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .status {
            margin-top: 20px;
            font-weight: bold;
        }

        .right {
      position: absolute;
      right: 0;
      top: 0;
      margin-top: 25px;
      margin-right: 15px;
      height: 70px;
    }

        .left {
            position: absolute;
            left: 4px;
            top: 0px;
            margin-top: 10px;
            margin-left: 60px;
            height: 100px;
            width: 80px;
        }

        @media (max-width: 1333px) {
  body {
    font-size: 14px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .container {
    width: 100%;
    max-width: 400px;
    margin-top: 20px;
  }

  .header {
    position: static;
    width: 100%;
  }

  .right,
  .left {
    position: static;
    margin-top: 0;
    margin-right: 0;
    height: auto;
  }
}
    


    </style>
</head>

<body>
<div class="header">
    <h1>Central Registrar for Cooperative Societies</h1>
  </div>
  <a href="https://www.g20.org/en/"><img class="right" src="images/g-20-logo.png" alt="G20 Summit image"> </a>
    <a href="index.php"><img class="left" src="images/embb.png" alt="Emblem Image (home screen)"> </a>
    <div class="container">
        <h2>Application Status</h2>
        <form method="post" action="">
            <div class="form-group">
                <input type="text" id="applicationID" name="applicationID" placeholder="Enter Application ID" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Check Status</button>
            </div>
        </form>
    </div>
</body>

</html>