<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"library");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>

<html>

    <head>
        <style>
            section {
  height: 100%;
  width: 100%;background-image: url('https://i.pinimg.com/originals/e6/25/70/e62570dd496bc1b9930542fdd0943d76.jpg');
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.container {
  width: 100%;
  max-width: 700px;
  margin: 0 auto;
  padding: 20px;
  box-shadow: 0px 0px 20px #00000010;
  background-color: white;
  border-radius: 8px;
  margin-bottom: 20px;
}
td,tr{
    text-allign:center;
    border-color: black;
}
        </style>
        
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
      <body>
        <section>
   <div class="container">       
<table>

    <tr>
    <td>USN</td>
    <td>User Name</td>
    <td>Email Address</td>
    <td>Phone Number</td>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $row["usn"]; ?></td>
    <td><?php echo $row["uname"]; ?></td>
    <td><?php echo $row["email"]; ?></td> 
    <td><?php echo $row["phone"]; ?></td>
    <td><a href="delete-process-users.php?usn=<?php echo $row["usn"]; ?>">Delete</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
</div>
</section>
    </body>

</html>


