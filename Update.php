<?php
	$conn = mysqli_connect('itflab63070135.mysql.database.azure.com', 'it63070135@itflab63070135', 'HIFmqm86', 'itflab', 3306);

	$name = $_POST['name'];
	$comment = $_POST['comment'];
	$link = $_POST['link'];
	$ID = $_POST['ID'];

	$sql = 'UPDATE guestbook SET name = "'.$name.'", comment = "'.$comment.'", link = "'.$link.'" WHERE ID = '.$ID.'';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #22EEED;
		}
	</style>
</head>
<body class="bg-dark py-5">
	<div class="container text-light">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body text-dark">
						<h2 align="center">
						<?php
							if(mysqli_query($conn, $sql)) {
								echo "EDIT COMPLETED";
							}
							else {
								echo "FAILED TO EDIT";
							}
						?>
						</h2>
						<p align="center" class="mt-4 mb-0"><a href="index.php" class="btn btn-sm btn-warning">BACK</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
