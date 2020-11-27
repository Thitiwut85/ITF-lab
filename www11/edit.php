<?php
	$conn = mysqli_connect('thitiwut.mysql.database.azure.com', 'thitiwut@thitiwut', 'Aom26rock', 'ITFLab');

	$id = $_GET['ID'];

	$sql = 'SELECT * FROM guestbook2 WHERE ID = '.$id.'';
	$query = mysqli_query($conn, $sql);
	if(!$query) {
		header('Location: index.php');
	}
	else {
		$data = mysqli_fetch_assoc($query);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #3380FF;
		}
	</style>
</head>
<body class="bg-secondary py-5">
	<div class="container p-3 my-3 bg-dark text-warning">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-6"><h1 class="text-monospace">Edit</h1></div>
						</div>
						<form action="update.php" method="post">
							<input type="text" name="id" value="<?php echo $data['ID']; ?>" class="form-control d-none" required>
							<div class="form-group">
								<label>ชื่อสินค้า</label>
								<input type="text" name="product" value="<?php echo $data['Product']; ?>" class="form-control">
							</div>
							<div class="form-group">
								<label>ราคาหน่วย</label>
								<input type="number" name="price" value="<?php echo $data['Price']; ?>" class="form-control" required>
							</div>
							<div class="form-group">
								<label>ส่วนลด(%)</label>
								<input type="number" name="discount" value="<?php echo $data['Discount']; ?>" class="form-control" required>
							</div>
                            <div class="form-group">
								<label>ราคาหลังลด</label>
								<input type="number" name="total" value="<?php echo $data['Total']; ?>" class="form-control">
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-sm btn-success my-3 font-weight-bold">SAVE</button>
								<a class="btn btn-sm btn-light my-3" href="index.php">CANCEL</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
