<?php

$url='localhost';
$username='root';
$password='';
$conn=mysqli_connect($url,$username,$password,"library");
if(isset($_POST['save']))
  {
        $title= $_POST['title'];
		$from_date = $_POST['from_date'];
		$to_date = $_POST['to_date'];
		$result= mysqli_query($conn,"SELECT * from trans-history where date_time between '$from_date' and '$to_date' AND title='$title';");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>My data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>User Name</th>
		<th>Email Address</th>
        <th>Book Name</th>
		    <th>Author</th>
    
      </tr>
    </thead>
    <tbody>
      <?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
    <tr>
	    <td><?php echo $row["slno"] ; ?></td>
        <td><?php echo $row["uname"] ; ?></td>
		<td><?php echo $row["email"] ; ?></td>
        <td><?php echo $row["title"] ; ?></td>
                <td><?php echo $row["author"] ; ?></td>

    </tr>

	  
	  <?php
	  $i++;
}
?>
	  </tbody>
  </table>

</div>

</body>

</html>