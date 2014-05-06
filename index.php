<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
	<link rel="stylesheet" type="text/css" href="stylesheets/styles.css">
	
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
</head>

<body>
	<div data-role="page" data-theme="c" id="page1">
		<div data-role="header">
			<h1>irgendwas</h1>
		</div>
		<div data-role="content">
			<div class="ui-field-contain">
				<label for="wert">Wert eingeben:</label>
				<input type="text" name="val" id="wert" value="hallo">
			</div>
			<ul data-role="listview">
				<li><a href="#">Test1</a></li>
				<li><a href="#">Test2</a></li>
				<?php 
					print('<li><a href="#">Cool1 von PHP</a></li>');
					echo '<li><a href="#">Cool2 von PHP</a></li>';
					$server='mysql:dbname=basics;host=localhost';
					$user='root';
					$pw='root';

					$dbh=new PDO($server,$user,$pw);
					$a=$dbh->query("SELECT * FROM testdata");
					foreach($a as $row) { 
						echo '<li><a href="#">'.$row["irgendwas"].'</a></li>';
					}
				?>				
			</ul>
		</div>
		<div data-role="footer">
			<h1>Footer</h1>
		</div>
	</div>
</body>

</html>