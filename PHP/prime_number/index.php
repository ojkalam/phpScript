<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Print all Prime number from 1 to N</title>
</head>
<body>	

	<?php 

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			if (!empty($_POST['num'])) {
				$num = $_POST['num'];

				for ($i=0; $i < $num; $i++) { 
					$flag = 0;
					for ($j=1; $j <= $i; $j++) { 
						if( ($i % $j) == 0 ){
							$flag++;
						}
					}
					if($flag == 2){
						echo "$i <br>";
					}
					$flag = 0;
				}
			}
		}

	 ?>
	<form id="myform" onsubmit="return validateForm()" action="" method="POST">
		<input type="text" name="num" placeholder="Enter N number and get prime number 1 to N number">
		<input type="submit" value="Get Prime Number">
	</form>

	<script>
		function validateForm()
		{
			var num = document.forms['myform']['num'].value;

			if (num == "") {

				alert('Number field is required!');
			}
		}
	</script>
</body>
</html>