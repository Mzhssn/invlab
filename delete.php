<?php
require 'function.php';

$id = $_GET["proc_id"];
if(delete($id)>0 ){
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