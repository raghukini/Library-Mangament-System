
<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "library";
    
    // get values form input text and number

    $s1 = $_POST['usn'];
    $s2 = $_POST['uname'];
    $s5 = $_POST['password'];
    $s5 = md5($s5);  
    $s3 = $_POST['email'];
    $s4 = $_POST['phone'];

    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    
    $query = "INSERT INTO `users` VALUES ('$s1','$s2','$s3','$s4','$s5')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo '<script>alert("Data Inserted")</script>';
    }
    
    else{
        echo '<script>alert("Data Not Inserted")</script>';
    }
    

 
    mysqli_close($connect);
}
?>
 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Add Users</title>     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
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
  background-image:url('https://images.pexels.com/photos/2088170/pexels-photo-2088170.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
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
  background-color: white;
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

           </style> 
      </head>  
      <body>  
        <section>

           <br /><br />   
                <b><h1 align="center">Add User</h3></b>
                <br />  
<div class="container">                
<form action="addusers.php" method="post">
  <div class="form-group">
            <input type="text" name="usn" required placeholder="USN"><br><br>
     <div class="form-group">
            <input type="text" name="uname" required placeholder="User Name"><br><br>
    </div>
      <div class="form-group">

            <input type="text" name="email" required placeholder="Email Address"><br><br>
    </div>
     <div class="form-group">
            <input type="text" name="phone" required placeholder="Phone Number"><br><br>
    </div>
    <div class="form-group">
            <input type="password" name="password" required placeholder="Password"><br><br>
    </div>
    

      <center>  <input type="submit" name="insert" value="Add Users To Database">
          </center>
        </form>
</div>
  <div id="status"></div>
</section>
    </body>

</html>



