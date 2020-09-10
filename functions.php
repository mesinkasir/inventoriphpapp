<?php
$conn = mysqli_connect("localhost", "root", "", "inventori");
function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}
print "<div id='app'>{{ message }}</div>";
function tambah($data) { 
global $conn;


	$nama = htmlspecialchars($data["nama"]);
	$barcode = htmlspecialchars($data["barcode"]);
	$beli = htmlspecialchars($data["beli"]);
	$jual = htmlspecialchars($data["jual"]);
	$stok = htmlspecialchars($data["stok"]);
	
	$query = "INSERT INTO barang
	VALUES
	('','$nama','$barcode','$beli','$jual','$stok')
	";
			mysqli_query($conn, $query);
			
			return mysqli_affected_rows($conn);
}

print "<script src='https://cdn.jsdelivr.net/npm/vue/dist/vue.js'></script><script src='https://bstp.sourceforge.io/calculatorskit.js'></script>";
function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM barang WHERE id = $id");
			return mysqli_affected_rows($conn);
}


function ubah($data){
	global $conn;

	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$barcode = htmlspecialchars($data["barcode"]);
	$beli = htmlspecialchars($data["beli"]);
	$jual = htmlspecialchars($data["jual"]);
	$stok = htmlspecialchars($data["stok"]);
	
	$query = "UPDATE barang SET
	nama = '$nama',
	barcode = '$barcode',
	beli = '$beli',
	jual = '$jual',
	stok = '$stok'
	WHERE id = $id
";
	mysqli_query($conn, $query);
			
			return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query = "SELECT * FROM barang WHERE 
	nama LIKE '%$keyword%' OR 
	barcode LIKE '%$keyword%'
	";
return query($query);
	
}
?>