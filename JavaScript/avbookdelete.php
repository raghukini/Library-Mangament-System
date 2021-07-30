<?php
$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"library");
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}
$result = mysqli_query($conn,"SELECT * FROM avbooks");
?>

<!DOCTYPE html>

<html>

    <head>

        <title> PHP INSERT DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>
      <body>
<table>
    <tr>
    <td>Slno </td>
    <td>Book Name</td>
    <td>Author </td>s
    <td>Editiom</td>
    <td>Code</td>
    <td>Type</td>
    <td>Shelf No</td>
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
    <td><?php echo $row["rto"]; ?></td>
    <td><?php echo $row["shelfno"]; ?></td>
    <td><a href="delete-process.php?slno=<?php echo $row["slno"]; ?>">Delete</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
</table>
    </body>

</html>


