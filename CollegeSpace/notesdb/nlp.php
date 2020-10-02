<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.3.1-dist/css/bootstrap.css"/>
</head>
<body>

<?php
	include("../Navbar.php");
	include("../connect_db.php");
	
?>	
<!-- Body 1-->
<div class="container mt-3" style="height: 200vh">
	<div class="row">
		<?php
			$query="Select * from notes where subject_name='NLP'";
			$result=mysqli_query($sqli,$query);
			if(mysqli_num_rows($result)>0){
				while ($row=mysqli_fetch_array($result)) {
					

				
		?>
		<div class="col-md-4 mt-3">
			<div class="card h-100">
		<div class="card-title h-50">
			<center> <?php echo "".$row['content'];  ?> </center>
		</div>
		<div class="card-body">
		<center><a href='<?php echo "".$row['location']; ?>' target="_blank" class="btn btn-primary">OPEN</a></center>
		</div>
		</div>

	</div>
	

		<?php

			}
			}
			
		?>
	</div>
</div>
	
	

<!--  End of Body  -->

<?php
		include("../Footer.php");
	?>

</body>
<script type="text/javascript" src="../JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="../bootstrap-4.3.1-dist/js/bootstrap.js"></script>

</html>
