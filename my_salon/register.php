<?php
$message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $input_username = $_POST['username'];
        $input_password = $_POST['password'];
        
        // check if user already exists
        if (file_exists("users/$input_username.txt")) {
            $message = '<p style="color: red;">Username already exists.</p>';
        } else {
            // create user file
            $file_content = "$input_username,$input_password";
            if (!file_exists("users")) {
                mkdir("users");
            }
            file_put_contents("users/$input_username.txt", $file_content);
            $message = '<p style="color: green;">Registration successful. Please login.</p>';
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="login-page">
    <div class="form">
      
      <h2>Register</h2>
      <?php echo $message; ?>
      <form action="register.php" method="post" class="login-form">
  <input type="text" name="username" placeholder="Username" required="">
  <input type="password" name="password" placeholder="Password" required="">
  <button type="submit">Register</button>
</form>

<p>Already registered? <a href="login.php">Login here</a>.</p>

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
