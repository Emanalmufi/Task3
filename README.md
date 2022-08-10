# Task3
```
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
```

```
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body style="background-color:#e7d5f7">
	    
		<div align="center">
      
        <?php
          echo 'Thanks';
        ?>
        </div>
        
    </body>
</html>
```

```
body{
color:black;
background-color:#e7d5f7;
font-size: 20px;
font-family:Verdana, Arial, Helvetica, monspace;
}

h2{
text-align: center;
}

.from-group{
padding: 10px;
display:blok;
}
```

```
<?php

$host="localhost";
$dbuser="root";
$dbpass="";
$dbname="test2";



//mysqli

@$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);

if(!$con){
    
    echo 'nooo connect';
    
}

else{
	echo 'connect';
}

?>
```
