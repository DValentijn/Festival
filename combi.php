<?php require_once "connect.php"; ?>
<?php require_once "header.php"; ?>
<html>
<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="w3.css" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Combi ticket | Dylano Valentijn</title>
</head>
<body>
    
<div class="flexbox">
    <div class="flexinput">
    <div class="form">
        <form method="post">
        <?php 
            $data = $pdo->query("SELECT `username` FROM `users`")->fetchAll(PDO::FETCH_OBJ);

        ?>


<h2 for="aantal">Hoeveel tickets wilt u?</h2>
        <select name="aantal" id="aantal">
        <option value="" selected>--- Aantal tickets ---</option>
        <option value="1">1 Ticket</option>
        <option value="2">2 Ticket(s)</option>
        <option value="3">3 Ticket(s)</option>
        <option value="4">4 Ticket(s)</option>
        <option value="5">5 Ticket(s)</option>
        <option value="6">6 Ticket(s)</option>
        <option value="7">7 Ticket(s)</option>
        <option value="8">8 Ticket(s)</option>
        <option value="9">9 Ticket(s)</option>
        <option value="10">10 Ticket(s)</option>

</select>

        <h2 for="users">Wat is uw account?</h2>
        <select name="users" id="user">
        <option value="" selected>--- Voor wie zijn de tickets? ---</option>
            <?php foreach($data as $d): ?>
             <option value="<?= $d->username; ?>"><?= $d->username; ?></option>
                  <?php endforeach; ?>
            </select></br>



            </br>


           
            <input class='button' value='Bestellen' type='submit' name='btcSave'></input>

        </form>

        <?php 
        if (isset($_POST["btcSave"])) {
            include('connect.php');
            header("location: bedankt.php");
        
            $ticket = 3;
            $aantal = $_POST["aantal"];
            $users = $_POST["users"];
        
            $query = "INSERT INTO `order` (`t_id`, `u_id`, `aantal`) VALUES ('$ticket', '$users','$aantal')";
        
            $stm = $pdo->prepare($query);
        
            if ($stm->execute()) {
        
            } else {
                echo "Dit dier is niet toegevoegd!";
            }
        }
        ?>




</body>

    <?php require_once "footer.php"; ?>