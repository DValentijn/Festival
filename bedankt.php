<?php require_once "connect.php"; ?>
<?php require_once "header.php"; ?>



<html>
    
<head>
<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Order bevestigd | Dylano Valentijn</title>
</head>
<div class="flexbox">
    <div class="flexinput">
<h2>Bedankt voor het bestellen!</h2>
<p>Uw bestelling</p>

<?php

$query = "SELECT o_id, aantal,t.ticket FROM `order` o INNER JOIN ticket t ON o.`t_id` = t.`t_id` ORDER BY o_id DESC LIMIT 1;"; 

$stm = $pdo->prepare($query);
                    if($stm->execute()){
                        $order = $stm->fetch(PDO::FETCH_OBJ);
                        echo "Ticket: ";
                        echo $order->ticket;
                        echo " </br> Aantal tickets: ";
                        echo $order->aantal;
                        
                    }


?>
</div></div>
</body>


</body>





<?php require_once "footer.php"; ?>