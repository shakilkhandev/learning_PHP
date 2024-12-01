<?php
// Set a cookie
setcookie("username", "Shakil", time() + (86400 * 7), "/"); // 86400 seconds = 1 day; this cookie will last for 7 days

// Check if the cookie is set
if (isset($_COOKIE["username"])) {
    echo "Cookie 'username' is set!<br>";
    echo "Value: " . $_COOKIE["username"];
} else {
    echo "Cookie 'username' is not set!";
}
?>
