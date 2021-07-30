<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "library");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
      if(isset($_POST['query'])){
        if(!empty($_POST['colname']) && !empty($_POST['query'])) {
            $search = mysqli_real_escape_string($connect, $_POST["query"]);

          $sort = $_POST['sortname'];
          $col = $_POST['colname'];
          $sql = "SELECT * FROM book WHERE $col LIKE '%".$search."%' ORDER BY $sort ASC";
        
        }
        else {
            $sql = "SELECT * FROM book ORDER BY slno";
          
      }
?>
<html>
<body>
<input  type="text" name="search_text" id="search_text" placeholder="Search">
<select name='colname'>
    <option name='slno'>Slno</option>
    <option name='title'>Book Name</option>
    <option name='author'>Author </option>
    <option name='code'>Code</option>
    <option name='edition'>Edition</option>
    <option name='type'>Type</option>
    <option name='shelfno'>Shelf number</option>
</select>
<select name='sortname'>
    <option name='slno'>Slno</option>
    <option name='title'>Book Title</option>
    <option name='author'>Author</option>
    <option name='code'>Code</option>
    <option name='edition'>Edition</option>
    <option name='type'>Type</option>
    <option name='shelfno'>Shelf Number</option>
</select>
    <input type="submit" name="submit" value="Submit">

</body>
</html>
<?php
// Attempt select query execution

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Slno</th>";
                echo "<th>Book Name</th>";
                echo "<th>Author</th>";
                echo "<th>Code</th>";
                echo "<th>Edition</th>";
                echo "<th>Type</th>";
                echo "<th>Shelf Number</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['slno'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['code'] . "</td>";
                echo "<td>" . $row['edition'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['shelfno'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>?>
 <html>
    <div id="result"></div>
  </div>
 <script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetchtry.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#submit').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
</html>
