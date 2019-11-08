<br>
<br>
<head>
<link rel="stylesheet" href="./css/gestionobjet.css">
</head>
<body class="bg-white">
	<div class="container">
    <h2 class="text-white" >Vends, troc ton objet</h2>
    <br>
    <br>
    <?php
    if(isset($_SESSION['nom']) == null) {
        header('Location: index.php');
    }
    echo "<div class='container'";
    echo "<div class='row'>";
    echo "<div class ='col-4'>";
    
    echo "</div>";
    require_once ("controler/controler.php");
    // instanciation de la classe controler
    $unControler = new Controler("localhost", "ppe", "root", "");
    
    require_once ("vue/cat_insert.php");
    if(isset($_POST['Valider'])){
        $unControler->insertObjet($_POST);
    }
    echo "</br>";
    echo "</div>";
    
    require_once ("vue/cat_delete.php");
    if(isset($_POST['Supprimer'])) {
        $unControler->deleteObjet($_POST['idobjet']);
    }
    echo "</div>";
    echo "</br>";

    // Appel de la methode du controler
    echo "<div class='col-4'>";
    $result = $unControler->selectObjet();
    require_once ("vue/cat.php");
    echo "</div>";
    echo "</div>";
    echo "</div>";
    ?>
</div>
</div>

</body>
</html>
