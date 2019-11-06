<html>
	<body>
    	<form method="post" action="">
        	Check for Armstrong Number</br></br>
        	<input type="number" name="value1" placeholder="Enter Number">
        	<button type="submit">Submit</button>
    	</form>
	</body>
</html>

<?php
$num = $_POST['value1'];
$sum = 0;
$rem = 0;
$temp = $num;

while($num > 0)
{
   $rem = $num % 10;
   $sum += $rem*$rem*$rem;
   $num /= 10;
}

if( $temp == $sum)
	echo "${temp} is an armstrong number";
else
	echo "${temp} is not an armstrong number";
?>
