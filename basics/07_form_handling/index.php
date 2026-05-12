<?php
$username = "";
$method = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $method = "POST";
} elseif (isset($_GET['username'])) {
    $username = htmlspecialchars($_GET['username']);
    $method = "GET";
}
?>
<!DOCTYPE html>
<html>

<body>
    <h3>Submit via POST</h3>
    <form method="POST">
        <input type="text" name="username" placeholder="Enter Name">
        <button type="submit">Submit POST</button>
    </form>

    <h3>Submit via GET</h3>
    <form method="GET">
        <input type="text" name="username" placeholder="Enter Name">
        <button type="submit">Submit GET</button>
    </form>

    <?php if ($username): ?>
        <p>Hello <b><?php echo $username; ?></b>! You used <b><?php echo $method; ?></b>.</p>
    <?php endif; ?>
</body>

</html>