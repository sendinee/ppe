<br>
<br>
<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./css/gestionproduit.css">
<link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
</head>
<body class="bg-white">
<?php
    if(isset($_SESSION['nom']) == null) {
      header('Location: index.php');
    }
      require_once ("controler/controler.php");
      // instanciation de la classe controler
      $unControler = new Controler("localhost","ppe", "root", "");
?> 

   
<div class="container-fluid">
	<div id="haut" class="row">
		<div class="col-md-6">
    <div class="ecrito">
     <h1> Prêts à échanger, vendre, partager <br>de manière eco responsable ? </h1>
     <button type="button" class="btn btn-primary"> <a id="go" href="menu_site.php?page=2">Mettre à disposition vos objets</a></button>
    </div>
		</div>
		<div class="col-md-6">
    <img src="./vue/kid.jpg"> 
		</div>
  </div>
  <?php 
  echo 
  "
  <div class='container-fluid'>
  <div class='row'>
    <div class='liste'>
  ";
  $result = $unControler->selectObjet();
  require_once ("vue/cat.php");
  echo "</div>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
  ?>
</div>

</body>
</html>
