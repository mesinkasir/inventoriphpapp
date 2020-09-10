<?php
require 'functions.php';
if( isset($_POST["submit"]) ) {
if( tambah($_POST) > 0 ) {
	echo "
	<script>
	alert('Success update databased');
	document.location.href ='stok.php';
	</script>
	";
	} else {
	echo "
	<script>
	alert('Failed Update databased');
	document.location.href ='stok.php';
	</script>
	";
}
}
?>

<!DOCTYPE html>
<html>
   <meta charset="utf-8">
    <title>Add New Product</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://www.hockeycomputindo.com/favicon.ico' rel='icon' type='image/x-icon'/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
  <?php require 'head.php';?>
<?php require 'nav.php';?>
  
  <div class="row shadow rounded">
  <div class="col-12 col-md-4"></div>
    <div class="col-12 col-md-4 p-3 p-md-5">
  
  <form action="" method="post">
  
  <label for="id">Name </label>
  <input type="text" name="nama" class="rounded float-right" id="nama" required><br/>

    <label for="id">Barcode </label>
  <input type="text" name="barcode" class="rounded float-right" id="barcode" required><br/>
 
    <label for="id">Buy Price </label>
  <input type="text" name="beli" class="rounded float-right" id="beli"><br/>
 
    <label for="id">Sell Price </label>
  <input type="text" name="jual" class="rounded float-right" id="jual" required><br/>
 
    <label for="id">stok </label>
  <input type="text" name="stok" class="rounded float-right" id="stok"><br/>
<br/>
<button class="btn btn-dark btn-block btn-lg" type="submit" name="submit">
Save
</button>

  </form>
    <div class="col-12 col-md-4"></div>
    <div class="col-12 col-md-12 text-center">
<hr>
<p class="text-center"><small>present by <a href="https://mesinkasironline.web.app" class="text-dark"> https://mesinkasironline.web.app</a></small></p>
</div>
</div>
</div>
</div>
</body>
</html>