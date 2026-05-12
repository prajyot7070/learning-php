<?php

// 1. Sessions (Server-side storage)
session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}

// 2. Cookies (Client-side storage)
$cookie_name = "last_visit";
$cookie_value = date("H:i:s");
setcookie($cookie_name, $cookie_value, time() + 3600, "/");

?>
<!DOCTYPE html>
<html>

<body>
    <h2>State Management</h2>

    <p><b>Session:</b> Views :- <b><?php echo $_SESSION['counter']; ?></b> </p>

    <p><b>Cookie:</b>
        <?php
        if (isset($_COOKIE[$cookie_name])) {
            echo "Your last visit was at: " . $_COOKIE[$cookie_name];
        } else {
            echo "Cookie reset";
        }
        ?>
    </p>

    <p><a href="?reset=1">Reset Session</a></p>

    <?php
    if (isset($_GET['reset'])) {
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    ?>
</body>

</html>