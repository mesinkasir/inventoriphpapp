<?php
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0 ) {
	echo "
	<script>
	alert('Product is deleted');
	document.location.href ='stok.php';
	</script>
	
	";
		
	
} else {
	echo "
	<script>
	alert('Opps... failed to delete product');
	document.location.href ='stok.php';
	</script>
	
	";
		
	
}

?>