<?php require_once "connect.php"; ?>
<?php require_once "header.php"; ?>
<html>
    <head>   
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Sign up festival | Dylano Valentijn</title> 
    </head>
    <body>
    <div class="flexbox">
  <div class="flexinput">
    <div class="Registreren">
                <form method="POST">
                <label for="username"> Gebruikersnaam:</label></br>
                <input type="text" name="username" id="username" placeholder="Geberuikersnaam"/>
                <br/> 
                <label for="password"> Wachtwoord:</label></br>
                <input type="password" name="password" id="password" placeholder="Wachtword"/>
                <br/>
                <label for="password2"> Wachtwoord verification:</label></br>
                <input type="password" name="password2" id="password2" placeholder="wachtword"/></br>
                <input type="submit" name="btnRegistreren" value="Registreren" /></br></br>
                <a href="login.php">Login</a>
                </form>
            </div>
</div>
</div>
            <?php
                if (isset($_POST["btnRegistreren"])){
                    $gebruikersnaam = $_POST["username"];
                    $password = $_POST["password"];
                    $password2 = $_POST["password2"];

                    if($password === $password2) {
                        $passwordHash = password_hash($password, null);
                

                        
                    $query = "INSERT INTO users (username, password) VALUES ('$gebruikersnaam', '$passwordHash')";
                    $stm = $pdo->prepare($query);
                    if ($stm->execute())
                    {
                        echo"Registreren is gelukt";

                    }
                }

            }
            ?>

<?php require_once "footer.php"; ?>