<!DOCTYPE html>

<?php
if(isset($_GET["enter"])){

 $number=$_GET["number"];



require 'connection.php';


    
    $insert="insert into storages( `number` ) "
            . "values('$number')";
    
    $query=  mysqli_query($con, $insert);
   

           
               echo '<script>window.location.assign("Welcome.php");</script>';

         
}
?>

   <head>
      <title>IntegerNumber storage</title>
   <meta charset="UTF-8">
    <link href = "storage.css" type="text/css" rel="stylesheet"/>
	</head>
	
	<body>
	<h2>Enter Number</h2>
	  <div class="from-group" align="center">
	   <form action=""<?php  echo $_SERVER["PHP_SELF"]; ?>" method="get">
	     <input type="number" name="number" value="integer"><br>
		 <input type="submit" name="enter" value="enter"style="background-color:white" >
	   </form>
	  </div>
   </body>
</html>
