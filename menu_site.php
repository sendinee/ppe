<head>
    <?php
    require("vue/header.php")
    ?>
    <link rel="stylesheet" href="./css/gestionobjet.css">
    <link rel="stylesheet" href="./css/navbar.css">
</head>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="height:6%;">
  <a class="navbar-brand" href="menu_site.php?page=1"><img class="logo" src="./vue/effray.png"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="menu_site.php?page=2">Objets</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu_site.php?page=3">Pricing</a>
      </li>
    </ul>
    <button class="btn btn-danger my-2 my-sm-0"><a id="deco" style="color: black;" href="menu_site.php?page=4">Déconnexion</a></button>
  </div>
</nav>
 
    
<br>
      <br>
      <!-- router -->
      <?php
        if(isset($_GET['page'])) {
          $page = $_GET['page'];
        }
        else {
          $page = 0;
        }
        switch($page) {
          case 1 : require_once ("gestionproduit.php");
          break;
          case 2 : require_once ("gestionobjet.php");
          break;
          case 3 : require_once ("gestionutilisateur.php");
          break;
          case 4 : require_once ("model/deconnexion.php");
          break;
        }
       ?>

  </nav>
</header>
