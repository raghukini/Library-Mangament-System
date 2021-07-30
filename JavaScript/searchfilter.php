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
    #id2{
    padding-top: 10%;
    font:;
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
     <select name="typebook" id="typebook">
  <option value="R">Reference</option>
  <option value="T">Text Book</option>
  <option value="O">Other</option>
</select>
 <select name="shelfno" id="shelfno">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
<select name="sortval" id="sortval">
  <option value="slno">Slno</option>
  <option value="title">Book Name</option>
  <option value="author">Author</option>
  <option value="edition">Edition</option>
  <option value="code">Code</option>
  <option value="type">Type</option>
  <option value="shelfno">Shelf Number</option>
</select>
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
   url:"fetch.php",
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