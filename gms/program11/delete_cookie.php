<?php
// Delete the cookie by setting its expiration time to the past
setcookie('username', '', time() - 3600, "/");
header("Location: set_cookie.php"); // Redirect back to set_cookie.php
exit;
?>
