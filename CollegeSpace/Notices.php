
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="mystyle.css" />
	<link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css"/>
</head>
<body>
	<?php
		include("Navbar.php");
	?>
	<div class="row" style="height: 100vh;width: 100%">

		<div class="container mt-4">
			<h3>Notices board</h3>
			<?php
				include("connect_db.php");
				$query="select * from notice";
				$result=mysqli_query($sqli,$query);
				if(mysqli_num_rows($result)>0){
				while($rows=mysqli_fetch_array($result)){

			
			?>
			<div class="col-md-12">
				<div class="card mt-4 p-2">
					<div class="title">
						<h4 class="card-title"><?php echo "".$rows['title'] ?></h4>
						<p><?php echo "".$rows['description'] ?></p>
						<small class="d-flex justify-content-end"><?php echo "".$rows['post_by'] ?></small>
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
		include("Footer.php");
	?>

</body>
<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</html>