<?php
	foreach ($query->result() as $row) {
		print $row->A;
		print $row->B;
		print "<br>";
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>tes dropdown</title>
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css"/>
		<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="../assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
		<link href="../assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="../assets/bootstrap/js/bootstrap.js"></script>
		<script src="../assets/bootstrap/js/jquery-1.11.2.js"></script>
		<script src="../assets/bootstrap/js/bootstrap1.min.js"></script>
	</head>
	<body>
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
		    Dropdown
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		  	<?php
		  		foreach ($query->result() as $row) 
		  		{
					echo "<li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"#\">".$row->A."</a></li>";
				}
		  	?>
		  </ul>
		</div>
		<div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tutorials
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
        </ul>
      </div>
	</body>
</html>