<?php
	include("../connect_db.php");

?>
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
	?>
	<div class="container" style="height: 100vh">
		<div class="row mt-5">
			<?php
				$query="Select * from sysllabus where subject_name='C'";
				$result=mysqli_query($sqli,$query);
				if(mysqli_num_rows($result)>0){
				while($row=mysqli_fetch_array($result)){

			
			?>
			<div class="col-md-4">
				<div class="card">
					<h4 class="card-title">C <?php echo "".$row['year']; ?></h4>
					<div class="card-body">
						<center><a href='<?php echo "".$row['location'] ?>' class="btn btn-primary">Open</a></center>
					</div>
				</div>
			</div>
			<?php
				}
			}

			?>
		</div>

	</div>

	<?php
		include("../Footer.php");
	?>

</body>
<script type="text/javascript" src="../JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="../bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</html>