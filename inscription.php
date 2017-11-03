<h1>Inscription</h1>
<!-- FORMULAIRE D'INSCRIPTION -->
<form method="post" action="#">
  <div>
    LoginID_<input type="text" name="name" value=""</input>
    Mot de passe_<input type="password" name="password" value=""></input>
    <button type="submit" >Envoyer</button>
  </div>
</form>

<?php
  $fp = fopen('formulaireInfo.csv', 'a+');
  if($_POST['name'] && $_POST['password']){
    fputcsv($fp,array($_POST['name'],$_POST['password']));
  }
  fclose($fp);
?>
