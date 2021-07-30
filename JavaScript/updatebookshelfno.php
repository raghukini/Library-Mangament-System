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
    
    $q  = $_POST['slno'];
    $q7 = $_POST['shelfno'];
    // connect to mysql database using mysqli

    // mysql query to insert data

    $query = "UPDATE `avbook` SET shelfno = '$q7' WHERE slno=$q";
     
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo '<script>alert("Data Updated")</script>';
    }
    
    else{
        echo '<script>alert("Data Not Updated")</script>';
    }
    
    mysqli_close($connect);
}
?>
<!DOCTYPE html>

<html>

    <head>

    
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
  background-color: #340143;
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
        <form action="updatebookshelfno.php" method="post">
            <div class="form-group">
            <input type="text" value='slno' name="slno" required placeholder="Book SLNO"><br><br>
           </div>
            <div class="form-group">
            
            <input type="input" name="shelfno" value="shelfno" required placeholder="New Shelf number"><br><br>
        </div><center>
<input type="submit" name="update" onclick="parent.location='updatebookshelfno.php'" value="Update Transaction List" class="McElieButton2"></td></center>
        </form>
        </div>
  <div id="status"></div>
</section>
</body>

</html>


