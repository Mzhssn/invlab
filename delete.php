<?php
require 'function.php';

$id = $_GET["id_proc"];
if(hapus($_POST)>0 ){
    echo "
    <script>
    alert('data berhasil dihapus');
    document.location.href='homeprocurement.php';
    </script>";
} else {
    echo "
    <script>
    alert('data gagal dihapus');
    document.location.href='homeprocurement.php';
    </script>";

}
?>