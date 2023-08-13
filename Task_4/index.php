<!DOCTYPE html>
<html>
<head>
<style>
 body{
   
    
   }
   .even{ 
   color:green;
   }
   .odd{ 
   color:red;
   }
   .grid {
    display: grid;
    grid-template-columns: repeat(10, 1fr); /* 10 columns per row */
    grid-gap: 5px; /* Gap between cells */
  }
   
</style>
</head>
<body>
<div class="grid">
<table>
<?php  
for ($x = 2; $x <= 1000; $x++) {

	for($i = 1; $i <=1000; $i++){
    	if($i == 1){
        	
  			echo " <tr class = 'odd'> <p class = 'odd'>$i </p></tr> ";
            continue;
		}
		$class = $x % $i != 0 ? "odd":"even";
  		echo " <tr class = '$class'> <p class = '$class'>$i </p></tr> ";
  }
}

?>  
</table>
</div>
</body>
</html>
