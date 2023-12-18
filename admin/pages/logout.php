<?php
// session_start();
session_destroy();

// Set header agar browser tidak menyimpan halaman dalam cache
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");

header("Location: ../index.php");
exit();
?>