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

<div class="lineup">
        <?php
        if ($stm->execute()) {
        $nieuwsitems = $stm->fetchAll(PDO::FETCH_OBJ);
        foreach ($nieuwsitems as $ni) { ?>
            <div class="test">
            <h2><?php echo "$ni->kopje" ?></h2>
            <p><?php echo "$ni->txt" ?></p> 
            <?php 
    } 
      }?>
      </div>
</div>

    </body>
</html>


<?php require_once "footer.php"; ?>