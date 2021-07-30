<html>
<!-- Load an icon library -->
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

/* Style the navigation links */
#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #fc5185;
}
</style>
</head>
<body><input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
<center>
<ul id="myMenu">
  <li><a  href="addusers.php" target="_blank">Add User</a></li>
  <li><a href="deleteuser.php" target="_blank">Delete User</a></li>
  <li><a href="addbooks.php" target="_blank">Add Book</a></li>
  <li><a href="deleteavbooks.php" target="_blank">Delete Book</a></li>
  <li><a href="addtrans.php" target="_blank">Record a Transaction</a></li>
  <li><a href="updatetransactiontime.php" target="_blank">Modify a Transaction</a></li>
  <li><a href="updateuser.php" target="_blank">Modify User information</a></li>
  <li><a href="modifiedbook.php" target="_blank">View available at starting of Semester</a></li>
  <li><a href="https://formspree.io/forms/moqyvgak/submissions" target="_blank">View Communication from Users</a></li>

<li><a href="modifiedavbook.php" target="_blank">View Books currently available</a></li>
  
  <li><a href="filtertransaction.php" target="_blank">View Transactions</a></li>
  <li><a href="https://formspree.io/forms/xeqvelyq/submissions" target="_blank">View Feedbacks</a></li>
  
  <li><a href="modifiedusers.php" target="_blank">View  Users</a></li>
  <li><a href="mailhtml.html" target="_blank">Send Mail</a></li>
  <li><a href="logout.php" target="_blank">Log Out</a></li>

</ul>
</div>
</body>
<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
</script>
</html>