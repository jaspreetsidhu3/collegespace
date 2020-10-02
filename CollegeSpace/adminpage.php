<?php
		session_start();
		$username='';
		if($_SESSION["key"]!=""){
			$username=$_SESSION["key"];
		}
		else{
			header("Location:index.php");
		}

		if(isset($_POST['submit_notice'])){
			include("connect_db.php");
			$titledata=$_POST['title'];
			$descriptiondata=$_POST['description'];
			if($titledata!="" || $descriptiondata!=""){
				$query="Insert into notice(post_by,title,description) value('$username','$titledata','$descriptiondata');";
				$result=mysqli_query($sqli,$query);
				if(mysqli_affected_rows($sqli)>0){
					echo "<script> alert('Done') </script>";
				}
			}
			else{
				echo "<script> alert('Fill all blocks') </script>";
			}
		}
		
			if (isset($_POST['upload_doc'])) {
			$uploadOk=0;
			if (isset($_FILES['file1'])) {
				$fname1=$_FILES['file1']['name'];
				$tmp=$_FILES['file1']['tmp_name'];
				$type=$_FILES["file1"]["type"];
				$size=$_FILES["file1"]["size"];
				$modal="uploads/$fname1";
				
				if($type != "image/jpeg" && $type != "image/png" && $type != "image/jpg"
					&& $type != "image/gif" ) {
					echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
    				
    				$uploadOk = 0;
												}

						if ($size>800000) {
							echo "<script>alert('file size error')</script>";
							
							$uploadOk=0;
						}
						else{
							$x=move_uploaded_file($tmp,"uploads/".$fname1);
							$uploadOk=1;
						}
						}
						else{
							echo "<script>alert('Please fill upload')</script>";
							$uploadOk=-1;
						}
						if ($uploadOk==1) {
							echo "<script>alert('file uploaded succesfully')</script>";
						}
						else if($uploadOk==0){
							echo "<script>alert('file init failed')</script>";
						}
					}
					
		
?>
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
	<div class="container mt-3">
		<h3> Hello,  <?php echo "".$username;  ?>  </h3>
	</div>
	<div class="container mt-4" style="height: 100vh">
			<div class="row">
				<div class="col-md-8">
					<h6>Broadcast notice</h6>
					<div class="bg-primary">
						<form method="post" class="table-responsive p-3">
							<input type="text" class="form-control" name="title" placeholder="Add title">
							<textarea name="description" class="mt-4 form-control" placeholder="Add description"></textarea>

							<input type="submit" name="submit_notice" class="mt-4 btn btn-success" name="post_button" value="Broadcast">
						</form>
					</div>
				</div>
				<div class="col-md-4">
					<h6>Add material</h6>
					<div class="bg-secondary">
						<form method="post" class="embed-responsive p-3" enctype="multipart/form-data">
							<input type="text" class="form-control" name="title" placeholder="Add title">
							<textarea name="description" class="mt-4 form-control" placeholder="Add description"></textarea>
							<input type="file" class="mt-4 form-control" name="file1" required="" required="">
							<input type="submit" name="upload_doc" class="mt-4 btn btn-primary" value="Upload">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		include("Footer.php");
	?>

</body>
<script type="text/javascript" src="JQuery/jquery-3.3.1.js"></script>
<script type="text/javascript" src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</html>