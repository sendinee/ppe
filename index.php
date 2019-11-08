<?php
  session_start();
 ?>
<html>
<head>
  <title>Site gestion stock</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/gestionobjet.css">
</head>

<body>
  <center>
    <h4>FAUT ENCORE FAIRE LACCUEIL</h4>
    <?php
        require_once ("controler/controler.php");
        $unControler = new Controler ("localhost", "ppe", "root", "");
        require_once ("vue/connexion.php");
        if(isset($_POST['SeConnecter'])) {
          $email = $_POST['email'];
          $mdp = $_POST['mdp'];
          $result = $unControler->verifConnexion($email, $mdp);          // var_dump($result);

        if (isset($result['nom'])) {
          // creation session
          $_SESSION['email'] = $result['email'];
          $_SESSION['nom'] = $result['nom'];
          $_SESSION['prenom'] = $result['prenom'];

          header('Location: menu_site.php?page=1');
        }
        else {
          echo "veuillez vérifier vos identifiants";
        }
      }
        require_once ("vue/inscription.php");
        if(isset($_POST['inscription']))
        {
            $result = $unControler->inscription($_POST);
        }
     ?>
</center>
</body>
</html>
