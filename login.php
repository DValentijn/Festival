<?php 
session_start();
require "header.php";
require "connect.php";

?>

<head>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="img/logo.png" />
    <title>Login pagina festival | Dylano Valentijn</title>
</head>

<body>
<div class="login">
            <form method="POST">
            <label for="username"> Gebruikersnaam:</label>
            <input type="text" name="username" id="username" placeholder="Geberuikersnaam"/>
            <br/> 
            <label for="password"> Wachtwoord:</label>
            <input type="password" name="password" id="password" placeholder="Wachtword"/>
            <br/> 
            <input type="submit" name="btnLogin" value="Login" />
            </br></br><a href="signup.php">Registreren</a>


            <?php
                if(isset($_POST['btnLogin']))
                {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $query = "SELECT * FROM `users` WHERE `username`='$username'";

                    $stm = $pdo->prepare($query);
                    if($stm->execute()){
                        $username = $stm->fetch(PDO::FETCH_OBJ);
                        if(password_verify($password, $username->password)) {
                            $_SESSION['username'] = $username;
                            Header("Location: home.php");
                        }else{
                            echo "fout";
                        }
                    }
                }
            ?>

               </div>
            </form>

<?php 
require "footer.php";
?>
