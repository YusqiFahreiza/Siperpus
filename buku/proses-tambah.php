<?php  
include '../koneksi.php';

if (isset($_POST['simpan'])) 
{
	$judul 		= $_POST['judul'];
	$penerbit 	= $_POST['penerbit'];
	$pengarang 	= $_POST['pengarang'];
	$ringkasan 	= $_POST['ringkasan'];
	$cover 		= $_POST['cover'];
	$stok 		= $_POST['stok'];
	$wkwk 		= $_POST['id_kategori'];

	$query =mysqli_query($kon, "INSERT INTO buku (judul, penerbit, pengarang, ringkasan, cover, stok, id_kategori)
			VALUES ('$judul', '$penerbit', '$pengarang', '$ringkasan', '$cover', '$stok', '$wkwk')");
	if ($query>0) {
		echo "
			<script>
				alert('Data Berhasil Ditambahkan');
				document.location.href='index.php';
			</script>
		";
	}
}
?>