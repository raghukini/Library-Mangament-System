<html>
<head>
    <style>
        #i22{
            background-color: #F2AA4CFF;
        }
    </style>
</head>
</html>

<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "info");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM `users` 
  WHERE uname LIKE '%".$search."%'
    OR email LIKE '%".$search."%' 
  OR phone LIKE '%".$search."%'";
}
else
{
 $query = "
  SELECT * FROM users ORDER BY email";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div id="i22" class="table-responsive">
   <table class="table table bordered">
    <b><tr>
     <th>User Name</th>
     <th>Email Address</th>
     <th>Phone Number</th>
    </tr></b>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <i><tr>
    <td>'.$row["uname"].'</td>
    <td>'.$row["password"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["phone"].'</td>
    
   </tr></i>
  ';
 }
 echo $output;
}
else
{
 echo '<script>alert("Data Not Found")</script>';
}

?>
