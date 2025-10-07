<html>
	<body>
	<form method="post">
	First Number<input name="t1"><br>
	Second Number<input name="t2"><br>
	Third Number<input name="t3"><br>
	<button name="b1">Average</button>
	</form>
	<?php
	if(isset($_POST['b1']))
	{
	$n1=$_POST['t1'];
	$n2=$_POST['t2'];
	$n3=$_POST['t3'];
	echo"Average is",($n1+$n2+$n3)/3;
	}
	?>
	</form>
	</body>
	</html>
