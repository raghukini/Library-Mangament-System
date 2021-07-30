<html>
<head>
    <style>
        #i22{
            background-color: #FEF8DD;
        }
    </style>
</head>
</html>

<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "library");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM  trans-history
  WHERE hid LIKE '%".$search."%'
  OR uname LIKE '%".$search."%' 
  OR email LIKE '%".$search."%' 
  OR title LIKE '%".$search."%' 
  OR author LIKE '%".$search."%'
  OR dateadded LIKE '%".$search."%'
  OR datesubmitted LIKE '%".$search."%'
   ";
}
else
{
 $query = "
  SELECT * FROM `trans-history` ORDER BY hid
 ";
}
$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div id="i22" class="table-responsive">
   <table class="table table bordered">
    <b><tr>
     <th>Transaction ID</th>
     <th>User Name</th>
     <th>Email ID</th>
     <th>Book Name</th>
     <th>Author</th>
     <th>Date of Purchase</th>
     <th>Date of Submission</th>
    </tr></b>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <i><tr>
    <td>'.$row["hid"].'</td>
    <td>'.$row["uname"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["title"].'</td>
    <td>'.$row["author"].'</td>
    <td>'.$row["dateadded"].'</td>
    <td>'.$row["datesubmitted"].'</td>
   </tr></i>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>
