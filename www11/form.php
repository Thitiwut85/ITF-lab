<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
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
	<div class="container p-3 my-3 bg-dark text-dark">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-6"><h1 class="text-monospace">Form</h1></div>
						</div>
						<form action="insert.php" method="post">
							<div class="form-group">
								<label>ชื่อสินค้า</label>
								<input type="text" name="product" class="form-control" required>
							</div>
							<div class="form-group">
								<label>ราคาหน่วย</label>
								<input type="number" name="price" class="form-control" required>
							</div>
							<div class="form-group">
								<label>ส่วนลด(%)</label>
								<input type="number" name="discount" class="form-control">
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-sm btn-success my-3 font-weight-bold">SUBMIT</button>
								<a class="btn btn-sm btn-danger my-3" href="index.php">CANCEL</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
