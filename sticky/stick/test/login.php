<?php
echo $rslt;
?>

<form action="login.php" method="post">
  <ul>
    <li>
      <label for="login">Benutzer</label>
      <input id="login" name="login">
    </li>
    <li>
      <label for="pass">Passwort</label>
      <input id="pass" name="pass" type="password">
    </li>
    <li>
      <button>anmelden</button>
    </li>
  </ul>
</form>