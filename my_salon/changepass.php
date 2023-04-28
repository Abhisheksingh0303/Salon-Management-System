<?php
session_start();

// check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['current_password']) && isset($_POST['new_password'])) {
        // get the user's current password from your database
        $current_password = '123';

        $input_current_password = $_POST['current_password'];
        $input_new_password = $_POST['new_password'];

        if ($input_current_password === $current_password) {
            // update the user's password in your database
            $new_password = $input_new_password;
            // TODO: update the password in your database using SQL

            $message = '<p style="color: green;">Password changed successfully.</p>';
        } else {
            $message = '<p style="color: red;">Incorrect current password.</p>';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="login-page">
    <div class="form">
      <h2>Change Password</h2>
      <?php echo $message; ?>
      <form action="changepass.php" method="post" class="login-form">
        <input type="password" name="current_password" placeholder="Current Password" required="">
        <input type="password" name="new_password" placeholder="New Password" required="">
        <button>Change Password</button>
        <button onclick="window.location.href='login.php'">Back</button>
      </form>
    </div>
  </div>
</body>
</html>

<style>
  * {
    box-sizing: border-box;
  }

  body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: linear-gradient(to right, #667eea, #764ba2);
  }

  .login-page {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }

  .form {
    background: #fff;
    max-width: 360px;
    width: 100%;
    padding: 50px 40px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
  }

  .form h2 {
    margin-bottom: 20px;
    color: #333;
    text-align: center;
  }

  .form input {
    border-radius: 5px;
    border: none;
    background: #f0f0f0;
    padding: 10px;
    margin-bottom: 20px;
    width: 100%;
    font-size: 14px;
    color: #333;
  }

  .form input:focus {
    outline: none;
    background: #e6e6e6;
  }

    .form button {
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      padding: 10px;
      width: 100%;
      transition: all 0.2s ease;
      margin-top: 10px;
    }

    .form button:hover {
      background-color: #3e8e41;
    }
    </style>
