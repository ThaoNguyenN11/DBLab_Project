<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        session_start();
        echo "Xin chao ban ".$_SESSION['username'];
    ?>
</body>
</html>