<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Search book from database</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 </head>
 <style>
  #i1{
    background-color: #101820FF;
    width:100%;
    height:22%;
    color:white;
  }
  #id3{
    padding-top: 10%;
  }
 </style>
 <body>
  <div  id='i1' class="container">
   <br />
   <h1 align="center">Book Available at beginning of the semester</h1><br />
   <div id='i2' class="form-group">
    <div id='i4'class="input-group">
    </div>
     <input  type="text" name="search_text" id="search_text" placeholder="Search" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetchav.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
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