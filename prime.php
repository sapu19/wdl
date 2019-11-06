<html>
	<body>
    	<form method="post" action="">
        	Check for Prime Number</br></br>
        	<input type="number" name="lr" placeholder="Enter Lower range">
        	<input type="number" name="ur" placeholder="Enter Upper range">      	 
        	<button type="submit">Submit</button>
    	</form>
	</body>
</html>

<?php
$lr = $_POST['lr'];
$ur = $_POST['ur'];

$i = 0;
echo "Prime Numbers Between ${lr} & ${ur} are:";
for($i = $lr; $i <= $ur; $i+=1)
{
	$count = 0;
	for($j = 1; $j<= $i; $j+=1)
	{
    	if($i % $j == 0)
        	$count += 1;
	}
	if($count == 2)
	echo " ${i} ";
}
?>
