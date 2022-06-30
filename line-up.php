<?php require_once "connect.php"; ?>
<?php require_once "header.php"; ?>
<html>
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="w3.css" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Line-up festival | Dylano Valentijn</title>

    <h1>Onze line-up tijdens het festival!</h1>
    <div class='flexbox'>
<?php 
$stm = $pdo->query("SELECT * FROM lineup ORDER BY `naam` ASC");

if ($stm->execute()) {
  $artiesten = $stm->fetchAll(PDO::FETCH_OBJ);
  foreach ($artiesten as $artiest) {

  

  echo 
  "<div class='flexinput'>".
    "<a href='$artiest->link' target='_blank'> <img src='$artiest->foto'> </a>".
    "<h2>$artiest->naam</h2>".
  "</div>";

  }
}
?>
</div>
</head>
<body>



</body>

</html>

<?php require_once "footer.php"; ?>










<img src="<?php echo $image ?>"> </a>