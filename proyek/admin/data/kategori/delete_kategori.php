<?php

include '../../koneksi.php';
$id_kategori = $_GET ['id_kategori'];
$query = "DELETE FROM tbl_kategori WHERE id_kategori = '$id_kategori'";
$hasil=mysqli_query($koneksi,$query);

if ($hasil) {
        
?>
    
<script language="javascript">document.location.href="tables_kategori.php";</script>
    
<?php
    
} else{
    echo "gagal hapus data";
}

?>
