<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Server superglobals example </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body class="bg-success">
	<div class="container">
	    <h1 class="text-primary">PHP - example of usage SERVER superglobals </h1>
		<p class="bg-warning">
		Several predefined variables in PHP are "superglobals", 
		which means they are available in all scopes throughout a script.
		For more reading visit <a href="https://www.php.net/manual/en/language.variables.superglobals.php" >
		https://www.php.net/manual/en/language.variables.superglobals.php </a>.
		</p>
	 <div class="row">
	    <div class="col-sm">
			<h1>Server & File Info</h1>
			<?php if($server): ?>
				<ul class="list-group">
				
					<?php foreach($server as $key => $value): ?>
						<li class="list-group-item ">
							<strong><?php echo $key; ?>: </strong>
							<?php echo $value; ?>
						</li>
					<?php endforeach; ?>
			  	
				</ul>
			<?php endif; ?>
		</div>	

        <div class="col-sm">
			<h1>Client Info</h1>
			<?php if($client): ?>
				<ul class="list-group">
					<?php foreach($client as $key => $value): ?>
						<li class="list-group-item">
							<strong><?php echo $key; ?>: </strong>
							<?php echo $value; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</div>	

		<div class="col-sm">
			<h1>Output of clasic phpinfo() function</h1>
			
				
					<?php 
					   phpinfo();
					?>
				
			
		</div>	
	 </div>	
	</div>
</body>
</html>