<?php
session_start();
include("header.php");
include("db.php");
?>

<h4 class='card-title'>Login-Bereich</h4>
<div class='logform'>
    <form method='post'>
        <table style='width: 90%; margin: 5%;'>
            <tr>
                <td><b>Benutzername:</b></td>
                <td><input type='text' class='form-control' name='benutzername'></td>
            </tr><tr>
                <td><b>Passwort:</b></td>
                <td><input type='password' class='form-control' name='passwort'></td>
            </tr><tr>
                <td></td>
                <td><input type='submit' class='btn btn-primary' name='einloggen' value='Login'></td
            </tr>
        </table>
    </form>
</div>

<?php
if (isset($_POST["einloggen"])) {       // Wenn das Formular abgeschickt wird 
    $password = $_POST["passwort"];     // erfolgt erstmals eine Zwischenspeicherung der eingegebenen Variablen
    $benutzern = $_POST["benutzername"];
    
<<<<<<< HEAD
    /*$statement = $pdo->prepare("SELECT id, passwort, benutzername, name, passwort FROM benutzer WHERE benutzername = :benutzername");
=======
    $statement = $pdo->prepare("SELECT passwort,id FROM benutzer WHERE benutzername = :benutzername");
>>>>>>> 7dc2f16bc0672c370375c24f559aca57f030e394
    $statement->bindParam(':benutzername', $_POST['benutzername']);
    $statement->execute();
    
    $row = $statement->fetch(PDO::FETCH_ASSOC);
<<<<<<< HEAD
    $pw = $row['passwort'];
    $pass_corr = password_verify($password, $pw);   // Das geholte password wird mit dem gesendeten Passwort mittels password_verify abgeglichen 
     
    $daten = new login();
    $daten->construct($row);
    echo $daten->getId(); */
    $statement = $pdo->prepare("SELECT id, passwort, benutzername, name, passwort FROM benutzer WHERE benutzername = ?");
    $statement->execute(array($benutzern));
    $row = $statement->fetch();
    $pw = $row['passwort'];
    echo $row['passwort'] . "<br />";
    echo $pw. "<br />";
    $pass_corr = password_verify($password, $pw);   // Das geholte password wird mit dem gesendeten Passwort mittels password_verify abgeglichen 
    $daten = new login();
    $daten->construct($row);
    echo $daten->getId(). "<br />";
    echo $daten->getBenutzername(). "<br />";
    echo $daten->getpasswort();



=======
    $pw = $row['passwort'] ;
    $pass_corr = password_verify($password, $pw);   // Das geholte password wird mit dem gesendeten Passwort mittels password_verify abgeglichen 
      
>>>>>>> 7dc2f16bc0672c370375c24f559aca57f030e394
    if (!empty($password) && !empty($benutzern)) {  
        if ($pass_corr == TRUE) {              
             $_SESSION['login'] = $row['id']; // Loggt einen ein!           
             echo"<div class='alert alert-success' style='margin-top: 3%; width: 45%; text-align: center; left: 17%;' role='alert'><b>Anmeldung war erfolreich!</b><br>Die Weiterleitung erfolgt in wenigen Sekunden. <br> <img src='img/ajax-loader.gif'></div>";
             echo "<meta http-equiv='refresh' content='1.5; URL=/verwaltung.php'>"; // Weiterleitung zur Verwaltung 
             }
        else {
            echo "<div class='alert alert-danger' style='margin-top: 3%; width: 45%; text-align: center; left: 17%;' role='alert'><b>Achtung!</b><br>Das Passwort und der Benutzername stimmen nicht überein.</div>";   
        }
    }
        else { 
        echo "<div class='alert alert-danger' style='margin-top: 2%; width: 45%; text-align: center; left: 17%;' role='alert'><b>Achtung!</b><br>Bitte fülle alle Eingabefelder aus!</div>";      
        }
    
}
include("navi.php");
include("footer.php");
?>