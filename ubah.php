<?php
require 'functions.php';
$id = $_GET["id"];
$brg = query("SELECT * FROM barang WHERE ID = $id")[0];
if( isset($_POST["submit"]) ) {
if( ubah($_POST) > 0 ) {
	echo "
	<script>
	alert('Success update data');
	document.location.href ='stok.php';
	</script>
	
	";
	} else {
	echo "
	<script>
	alert('Opps.. failed to update');
	document.location.href ='stok.php';
	</script>
	";
	}
}
?>
<!DOCTYPE html>
<html>
   <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://www.hockeycomputindo.com/favicon.ico' rel='icon' type='image/x-icon'/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Inventori Apps - Edit Product</title>	
  </head>
  <body>

<div class="container">
  <?php require 'head.php';?>
<?php require 'nav.php';?>
  
  <div class="row rounded shadow">
  <div class="col-12 col-md-4"></div>
    <div class="col-12 col-md-4 p-3 p-md-5">
  <h3>Edit Product</h3>
  <form action="" method="post">
  <input type="hidden" name="id" class="rounded float-right" value="<?= $brg["id"];?>"><br/>

  <label for="id">Name </label>
  <input type="text" name="nama" class="rounded float-right" id="nama" required value="<?= $brg["nama"];?>"><br/>

    <label for="id">barcode </label>
  <input type="text" name="barcode" class="rounded float-right" id="barcode" required value="<?= $brg["barcode"];?>"><br/>

    <label for="id">Buy Price </label>
  <input type="text" name="beli" class="rounded float-right" id="beli" value="<?= $brg["beli"];?>"><br/>
 
    <label for="id">Sell Price  </label>
  <input type="text" name="jual" class="rounded float-right" id="jual" required value="<?= $brg["jual"];?>"><br/>
 
    <label for="id">Stok </label>
  <input type="text" name="stok" class="rounded float-right" id="stok" value="<?= $brg["stok"];?>"><br/><br/>
<button type="submit" class="btn btn-dark btn-lg btn-block rounded" name="submit">
Update
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