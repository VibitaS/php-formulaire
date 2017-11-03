<h1>Connexion</h1>
<!-- FORMULAIRE DE CONNEXION -->
<form method="post" action="#">
  <div>
    LoginID_<input type="text" name="name" value=""</input>
    Mot de passe_<input type="password" name="password" value=""></input>
    <button type="submit">Connexion</button>
  </div>
</form>

<!-- TRAITEMENT DU FORMULAIRE -->
<?php
  if(isset($_POST['submit'])) {
    $connexion = false;
    $fp = fopen('formulaireInfo.csv','rb');

    while ($formInfo = (fgetcsv($fp,",") !== FALSE)){
      if ($formInfo[0]==$_POST['name'] && $formInfo[1]==$_POST['password']){
        $connexion = true;
        break;
      }
    }
    if($connexion){
      print "Connexion réussie";
      session_start();
      session_regenerate_id();
      if(array_key_exists('name', $_POST) && isset($_POST['name']) && isset($_POST['password'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['password'] = $_POST['password'];

        echo($fp);
      }
      else {
        print "Id et/ou mdp incorrecte";
      }
    }
  }
?>
