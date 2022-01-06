<html>
	<body>
			<p>Skiping number</p>
			<form method="post">
				Enter number to skip:<input type="number" name="number"><br/>
				<input type="submit" name = "submit" value="submit"> 
			</form>
		<?php
			$number = $_POST['number'];
			echo "The number you selected is: $number";
			echo "<br>";
			echo "The result is: ";
			echo "<br>";
			for ($i = 1; $i <= 100; $i++)
			{
				if (($i % $number)== 0)
				{
					continue;
				}
				else
				{
					echo $i;
					echo "<br/>";	
				}
			}
		?>
	</body>
</html>