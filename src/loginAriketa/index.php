<?php  
    session_start();

    if (isset($_POST['logout'])) {
        session_destroy();
        header("Location: babestu.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
        if (empty($_SESSION['erabiltzailea']) && empty($_SESSION['pasahitza'])) {
                header("Location: babestu.php");
                exit();      
            }else {
                echo "Kaixo " . $_SESSION['erabiltzailea'];
            }   
        ?>
    </h1>
    <br><br>
    <form action="index.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>