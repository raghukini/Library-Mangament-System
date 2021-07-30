<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"library");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM avbook");
?>

<!DOCTYPE html>

<html>

    <head>
        <style>
            section {
 background-image: url('https://st.depositphotos.com/3008028/4295/i/950/depositphotos_42950533-stock-photo-dark-color-background-or-texture.jpg');
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
    <td>Slno</td>
    <td>Book Name</td>
    <td>Author</td>
    <td>Edition</td>
    <td>Code</td>
    <td>Type of Book</td>
    <td>Shelf Number</td>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $row["slno"]; ?></td>
    <td><?php echo $row["title"]; ?></td>
    <td><?php echo $row["author"]; ?></td> 
    <td><?php echo $row["edition"]; ?></td>
    <td><?php echo $row["code"]; ?></td>
    <td><?php echo $row["type"]; ?></td> 
    <td><?php echo $row["shelfno"]; ?></td>
    <td><a href="delete-process-dbbook.php?slno=<?php echo $row["slno"]; ?>">Delete</a></td>
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


