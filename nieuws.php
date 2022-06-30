<?php require_once "connect.php"; ?>
<?php require_once "header.php"; ?>
<html>
    <head>   
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="w3.css" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Line-up festival | Dylano Valentijn</title> 
    </head>
    <body>

    <?php
    $stm = $pdo->query("SELECT * FROM nieuwsitems");
    ?>

<div class="flexbox">
        <?php
        if ($stm->execute()) {
        $nieuwsitems = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($nieuwsitems as $ni) {
            echo
            "<div class='flexinput' style='background-color: rgb(23, 91, 150)'; border-radius: 10px;>".
            "<h2>$ni->kopje</h2>".
            "<p class='flex-p'>$ni->txt</p></div>";
    } 
      }?>
      
      </div>
</div>

    </body>
</html>


<?php require_once "footer.php"; ?>