<?php
    session_start();
    echo isset($_SESSION['login']);
    if(isset($_SESSION['login'])) {
      header('LOCATION:adminpage.php'); die();
    }
?>
<!DOCTYPE html>
<html>
   <head>
     <meta http-equiv='content-type' content='text/html;charset=utf-8' />
     <title>Login</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <style>
      *{
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  font-family: "Montserrat";
}
section {
  height: 100vh;
  width: 100%;
  background-color: #c24df6;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.container {
  width: 90%;
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  box-shadow: 0px 0px 20px #00000010;
  background-color: #ffff66;
  border-radius: 8px;
  margin-bottom: 20px;
}
.form-group {
  width: 100%;
  margin-top: 20px;
  font-size: 20px;
}
.form-group input,
.form-group textarea {
  width: 100%;
  padding: 5px;
  font-size: 18px;
  border: 1px solid rgba(128, 128, 128, 0.199);
  margin-top: 5px;
}

textarea {
  resize: vertical;
}
button[type="submit"] {
  width: 100%;
  border: none;
  outline: none;
  padding: 20px;
  font-size: 24px;
  border-radius: 8px;
  font-family: "Montserrat";
  color: rgb(27, 166, 247);
  text-align: center;
  cursor: pointer;
  margin-top: 10px;
  transition: 0.3s ease background-color;
}
button[type="submit"]:hover {
  background-color: rgb(214, 226, 236);
}
#status {
  width: 90%;
  max-width: 500px;
  text-align: center;
  padding: 10px;
  margin: 0 auto;
  border-radius: 8px;
}
#status.success {
  background-color: rgb(211, 250, 153);
  animation: status 4s ease forwards;
}
#status.error {
  background-color: rgb(250, 129, 92);
  color: white;
  animation: status 4s ease forwards;
}
@keyframes status {
  0% {
    opacity: 1;
    pointer-events: all;
  }
  90% {
    opacity: 1;
    pointer-events: all;
  }
  100% {
    opacity: 0;
    pointer-events: none;
  }
}
</style>
   </head>
<body>
  <div class="container">
    <h3 class="text-center">Login</h3>
    <?php
      if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'admin' && $password === 'password'){
          $_SESSION['login'] = true; header('LOCATION:adminpage.php'); die();
        } {
          echo "<div class='alert alert-danger'>Username and Password do not match.</div>";
        }
        
      }
    ?>
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" name="password" required>
      </div>
      <button type="submit" name="submit" class="btn btn-default">Login</button>
    </form>
  </div>
</body>
</html>