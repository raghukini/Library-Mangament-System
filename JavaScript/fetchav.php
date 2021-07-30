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
$connect = mysqli_connect("localhost", "root", "", "library");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM avbook 
  WHERE slno LIKE '%".$search."%'
  OR title LIKE '%".$search."%'
  OR author LIKE '%".$search."%' 
  OR edition LIKE '%".$search."%' 
  OR code LIKE '%".$search."%' 
  OR type LIKE '%".$search."%'
  OR shelfno LIKE '%".$search."%'
 ";
}
else
{
 $query = "
  SELECT * FROM avbook ORDER BY slno
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div id="i22" class="table-responsive">
   <table class="table table bordered">
    <b><tr>
     <th>Slno</th>
     <th>Title</th>
     <th>Author</th>
     <th>Edition</th>
     <th>Code</th>
     <th>Type</th>
     <th>Shelfno</th>
    </tr></b>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <i><tr>
    <td>'.$row["slno"].'</td>
    <td>'.$row["title"].'</td>
    <td>'.$row["author"].'</td>
    <td>'.$row["edition"].'</td>
    <td>'.$row["code"].'</td>
    <td>'.$row["type"].'</td>
    <td>'.$row["shelfno"].'</td>
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
