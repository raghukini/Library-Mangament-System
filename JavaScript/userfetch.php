
<?php

//database_connection.php

$connect = new PDO("localhost", "root", "");

$column = array('usn', 'uname', 'email', 'phone');

$query = "
SELECT * FROM users 
";

if(isset($_POST['usn'], $_POST['uname']) && $_POST['usn'] != '' && $_POST['uname'] != '')
{
 $query .= '
 WHERE usn = "'.$_POST['usn'].'" AND uname = "'.$_POST['uname'].'" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY usn DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();



$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['usn'];
 $sub_array[] = $row['uname'];
 $sub_array[] = $row['email'];
 $sub_array[] = $row['phone'];
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM users";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 "draw"       =>  intval($_POST["draw"]),
 "recordsTotal"   =>  count_all_data($connect),
 "recordsFiltered"  =>  $number_filter_row,
 "data"       =>  $data
);

echo json_encode($output);

?>
