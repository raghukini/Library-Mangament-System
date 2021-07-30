<html>
<!-- Load an icon library -->
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  body{
     background-image: url("https://www.freecodecamp.org/news/content/images/2020/04/w-qjCHPZbeXCQ-unsplash.jpg");
  }
	.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

/* Navbar links */
.navbar a {
  float: left;
  text-align: center;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

/* Navbar links on mouse-over */
.navbar a:hover {
  background-color: #000;
}

/* Current/active navbar link */
.active {
  background-color: #ff781f;
}

/* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
</head>
<body>

<div class="navbar">
  <a class="active" href="userpage.php"><i class="fa fa-fw fa-home"></i>Making booking</a>
  <a href="modifiedavbook.php" target="_blank"><i class="fa fa-fw fa-search"></i> Search Available Book</a>
  <a href="changepassword.php" target="_blank"><i class="fa fa-fw fa-search"></i>Change Password</a>
  <a href="adminuser.html"  target="_blank"><i class="fa fa-fw fa-envelope"></i>Contact Admin</a>
  <a href="logout.php"  target="_blank"><i class="fa fa-fw fa-user"></i> Logout</a>
</div><br><br><br><br><br><br><br>
<center><h1>Instructions</h1>
	<p>To contact admin click on the<br> contact admin button above<br>
		Do not forget to logout<br>
		See the available book in the department <br> library by clicking search button above</p></center>
</body>
</html>