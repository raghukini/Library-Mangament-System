<html>
<head>
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
  background-image:url('https://i.pinimg.com/originals/7d/3d/17/7d3d175c81b4408d860a939c7acd26cc.jpg');
;
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
    <body></body>
</html>
<?php

// php code to Insert data into mysql database from input text
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "library";
    
    // get values form input text and number

    $b1 = $_POST['slno'];
    $b2 = $_POST['title'];
    $b3 = $_POST['author'];
    $b4 = $_POST['edition'];
    $b5 = $_POST['code'];
    $b6 = $_POST['type'];
    $b7 = $_POST['shelfno'];
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `book`(`slno`, `title`, `author`, `edition`, `code`, `type`, `shelfno`) VALUES ('$b1','$b2','$b3','$b4','$b5','$b6','$b7')";
       $result = mysqli_query($connect,$query);
     if($result)
    {
        echo '<script>alert("Data Inserted")</script>';
    }
    
    else{
        echo '<script>alert("Data Not Inserted")</script>';
    }
   $connect2 = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query2 = "INSERT INTO `avbook`(`slno`, `title`, `author`, `edition`, `code`, `type`, `shelfno`) VALUES ('$b1','$b2','$b3','$b4','$b5','$b6','$b7')";
    
    $result2 = mysqli_query($connect2,$query2);
    
    // check if mysql query successful

    if($result2)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_close($connect2);


 
    mysqli_close($connect);
}
?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP INSERT DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
<section>
    <h1>Enter the books into Database</h1><br><br>
      <div class="container">

        <form action="addbooks.php" method="post">
                  <div class="form-group">

            <input type="text" name="slno" required placeholder="Sl No"><br><br>
      <div class="form-group">

            <input type="text" name="title" required placeholder="Title"><br><br>
      </div>
      <div class="form-group">

            <input type="text" name="author" required placeholder="Author"><br><br>
      </div>
      <div class="form-group">

            <input type="text" name="edition" required placeholder="Edition"><br><br>
      </div>
      <div class="form-group">

            <input type="text" name="code" required placeholder="Code"><br><br>
      </div>
      <div class="form-group">

            <input type="text" name="type" required placeholder="Type of book"><br><br>
   </div> 
      <div class="form-group">

            <input type="text" name="shelfno" required placeholder="Shelf Number"><br><br>
</div>
 <input type="submit" name="insert" value="Add Data To Database">
</div>
        </form>
    </div>
          <div id="status"></div>

</section>
    </body>

</html>


