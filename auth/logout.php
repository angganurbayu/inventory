<?php
session_start();

// Hapus semua data session
$_SESSION = array();

// Hapus cookie session
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// Hancurkan session
session_destroy();

// Redirect ke halaman login
header("Location: login.php");
exit();
?>