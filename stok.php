<?php
require 'functions.php';
$barang = query ("SELECT * FROM barang");
if ( isset($_POST["cari"]) ){
	$barang = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://www.hockeycomputindo.com/favicon.ico' rel='icon' type='image/x-icon'/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<title>inventory Apps</title>
</head>
<body>
	<div class="container">
		<?php require 'head.php'; ?>
		<?php require 'nav.php'; ?> <a class="btn rounded-cirlce btn-dark" href="tambah.php">Add New</a>
		<form class="float-right" action="" method="post">
			<input type="text" name="keyword" autofokus placeholder="pencarian" class="rounded p-1" autocomplete="off">
			<button type="submit" class="btn btn-dark" name="cari">
				<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
					<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
				</svg>
			</button>
			<br/>
			<br/>
		</form>
		<table class="table shadow rounded">
			<tr class="bg-dark text-white">
<th>#</th>
<th>Name</th>
<th>Barcode</th>
<th>Buy Price</th>
<th>Sell Price</th>
<th>Stock</th>
<th>Set</th>
</tr>
<?php $i= 1; ?>
<?php foreach( $barang as $row ) : ?>
<tr>
<td><?= $i; ?></td>
<td><?= $row["nama"]; ?></td>   
<td><?= $row["barcode"]; ?></td>
<td><?= $row ["beli"]; ?></td>
<td><?= $row["jual"]; ?></td>
<td><?= $row["stok"]; ?></td>
	<td>
					<a class="btn btn-sm btn-primary" href="ubah.php?id=<?=$row['id'];?>">
						<svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
							<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
						</svg>
					</a>
					<a class="btn btn-sm btn-danger" href="hapus.php?id=<?=$row['id'];?>" onclick="return confirm('Delete this product stock ??');">
						<svg width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
							<path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z" />
							<path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z" />
						</svg>
					</a>
				</td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
<hr>
		<p class="text-center"><small>present by <a href="https://mesinkasironline.web.app" class="text-dark"> https://mesinkasironline.web.app</a></small>
		</p>
	</div>
</body>
</html>