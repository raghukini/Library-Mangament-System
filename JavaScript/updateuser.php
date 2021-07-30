<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['update']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "library";
    
    // get values form input text and number
$connect = mysqli_connect($hostname, $username, $password, $databaseName);
// Check connection
if($connect === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
    
    $q1  = $_POST['usn'];
    $q2  = $_POST['uname'];
    $q3 = $_POST['password'];
    $q3=md5($q3);
    // connect to mysql database using mysqli

    // mysql query to insert data

    $query = "UPDATE `users` SET password = '$q3' WHERE usn='$q1' and uname='$q2'";
     
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_close($connect);
}
?>
<!DOCTYPE html>

<html>

    <head>

        <title> PHP INSERT DATA </title>

        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  background-color: #B57Fb3;
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
  box-shadow: 0px 0px 20px #FDF2F0;
  background-color: #B19CD9;
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
        <div class="container">
        <center><h1>Update Transaction Date</h1></center>
        <form action="updateuser.php" method="post">
            <div class="form-group">
            <input type="text" name="usn" required placeholder="USN"><br><br>
            <div class="form-group">
            <input type="text" name="uname" required placeholder="User Name"><br><br>
           </div>
            <div class="form-group">
            
            <input type="text" name="password" required placeholder="password"><br><br>
        </div><center>
<input type="submit" name="update" onclick="parent.location='updateuser.php'" value="Update User Info List" class="McElieButton2"></td></center>
        </form>
        </div>
  <div id="status"></div>
</section>
</body>

</html>


