<!DOCTYPE html>
<html>
<head>
	  <title>Befeni Test</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">	 
	 </script>
</head>
<body>
	<?php include('server.php') ?>
	<div class="container">
		<div class="row mt-5 border-bottom">
			<h1>Result</h1>
		</div>
 		<div class="row pt-2 border">
 			<div class="col-6 border-right">
 				<?php
 					echo $problem;
 				?>
 			</div>
 			<div class="col-6">
 				<?php
 					echo $total;
 				?>
 			</div>
      	
      	</div>
  </div>
</body>
</html>