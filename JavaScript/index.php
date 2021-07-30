 <?php  
 $connect = mysqli_connect("localhost", "root", "", "library");  
 session_start();  
 if(isset($_SESSION["username"]))  
 {  
      header("location:userpage.php");  
 }  
 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]) && empty($_POST["email"]) && empty($_POST["email"]) && empty($_POST["usn"]))  
      {  
           echo '<script>alert("All the Fields are required")</script>';  
      }  
      else  
      {  $username = mysqli_real_escape_string($connect, $_POST["uname"]);  
           
           $usn = mysqli_real_escape_string($connect, $_POST["usn"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $email = mysqli_real_escape_string($connect, $_POST["email"]);  
           $phone = mysqli_real_escape_string($connect, $_POST["phone"]);  
           $password = md5($password);  
           $query = "INSERT INTO users  VALUES('$usn','$username','$email', '$phone', '$password')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }  
      }  
 }  
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["password"]) && empty($_POST["usn"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $usn = mysqli_real_escape_string($connect, $_POST["usn"]);
 
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM users WHERE usn = '$usn' AND password = '$password'";  
           $result = mysqli_query($connect, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                $_SESSION['uname'] = $username;  
                header("location:userpage.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Welcome user! Login here</title>     <meta charset="utf-8">
           <style>
            
            .container
            {
              color: #000000;
              background-image: url('https://st2.depositphotos.com/1747568/11982/v/950/depositphotos_119823394-stock-illustration-light-background-made-of-triangles.jpg');
            }
           </style>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<style>
#message p {
  padding: 5px 35px;
  font-size: 18px;
}
body{
  background-image:url('https://wallpaperaccess.com/full/1397802.jpg');
}
</style> 
      </head>  
      <body>  
        <section>
           <br /><br />  
           <div class="container" style="width:500px;">  
                <b><h3 align="center">Welcome user!</h3></b>
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center">Login</h3>  
                <br />  
                <form method="post">  
                     <label>Enter your USN</label>  
                     <input type="text" name="usn" class="form-control" />  
                    <br>
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$*^!#&]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter and a special character, and at least 8 or more characters" required//>  
                     <br />   
                     <center>
                     <input type='reset'  name="Reset" value="Reset" class="btn btn-info">
          
                     <input type="submit" name="login" value="Login" class="btn btn-info" /> 
                     </center> 
                     <br />  
                     <p align="center"><a href="index.php  target="_blank"">Register</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">Register Here</h3>  
                <br />  
                <form method="post">  
                     <label>Enter your USN</label>  
                     <input type="text" name="usn" class="form-control" />  
                     <br />
                     <label>Enter Username</label>  
                     <input type="text" name="uname" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$*^!#&]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter and a special character, and at least 8 or more characters" required/>  
                     <br />  
                     <label>Enter Email Address</label>  
                     <input type="Email" name="email" class="form-control" />  
                     <br />  
                     <label>Enter Phone number</label>  
                     <input type="number" name="phone" class="form-control" />  
                     <br /> <center>
                     <input type='reset'  name="Reset" value="Reset" class="btn btn-info">

                     <input type="submit" name="register" value="Register" class="btn btn-info" /> 
                   </center>
                     <br />  
                     <p align="center"><a href="index.php?action=login"  target="_blank">Login</a></p>  

                </form>  
                <?php  
                }  
                ?>

</div>

      </body>  
       </section>  

 </html>  
