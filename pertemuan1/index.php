<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	$fak = [1,321321,3312321];
	echo var_dump($fak);
	
	
	?>
<table border ="1" cellpadding = "10" cellspacing="0">
	<?php  for ($i=1; $i <= 5 ; $i++) { ?>
		<tr>
			<?php for ($j=1; $j <= 5; $j++) { ?> 
				<td>
					<?php 
						echo ("$i" );
				echo ("$j" );
				  ?>
				</td>
			

				
			<?php	} ?>
		</tr>
	<?php } ?>
</table>

</body>
</html>