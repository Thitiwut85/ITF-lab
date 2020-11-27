<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 7px #3380FF;
		}
	</style>
</head>
<body class="bg-secondary">
	<div class="container p-3 my-3 bg-dark text-primary">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-6"><h1 class="text-Sans-serif">คำนวณราคาหลังลด</h1></div>
							<div class="col-6 text-right"><a href="form.php" class="btn btn-info btn-sm font-weight-bold">ADD</a></div>
						</div>
						<div class="table-responsive">
							<?php
								$conn = mysqli_init();
								mysqli_real_connect($conn, 'thitiwut.mysql.database.azure.com', 'thitiwut@thitiwut', 'Aom26rock', 'ITFLab', 3306);
								if (mysqli_connect_errno($conn))
								{
								    die('Failed to connect to MySQL: '.mysqli_connect_error());
								}
								$res = mysqli_query($conn, 'SELECT * FROM guestbook2');
							?>
							<table class="table table-active table-hover">
								<thead class="thead-dark">
									<tr>
										<th>ชื่อสินค้า</th>
										<th>ราคาหน่วย</th>
										<th>ส่วนลด(%)</th>
                                        					<th>ราคาหลังลด</th>
										<th width="150px">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
										while($Result = mysqli_fetch_array($res)) {
									?>
									<tr>
										<td><?php echo $Result['Product'];?></td>
										<td><?php echo $Result['Price'];?></td>
										<td><?php echo $Result['Discount'];?></td>
                                        					<td><?php echo $Result['Total'];?></td>
										<td><a href="edit.php?ID=<?php echo $Result['ID'];?>" class="btn btn-sm btn-dark">EDIT</a></td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
							<?php
								mysqli_close($conn);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
