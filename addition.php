<html>
	<body>
	<form method="post">
	First Number<input name="t1"><br>
	Second Number<input name="t2"><br>
	<button name="b1">Add</button>
	</form>
	<?php
	if(isset($_POST['b1']))
	{
	$n1=$_POST['t1'];
	$n2=$_POST['t2'];
	echo"Addition is",$n1+$n2;
	}
	?>
	</form>
	</body>
	</html>

