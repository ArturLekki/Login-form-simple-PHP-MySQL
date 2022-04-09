<?php
    session_start();
    if(!isset($_SESSION['logged']) || ($_SESSION['logged']==false))
    {
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged</title>
</head>
<body>
    <?php
        echo "Welcome ".$_SESSION['nick']." !<br/>";
        echo '<a href="logout.php">Log out</a>';
    ?>
</body>
</html>
