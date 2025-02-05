  <?php
  // Appel le model
require_once("model/model.php");

class controler {
    private $unModel;

    public function __construct ($server, $bdd, $user, $mdp) {
      // instantiation de la classe model
      $this->unModel = new Model ($server, $bdd, $user, $mdp);
    }

    public function selectProduits() {
      $result = $this->unModel->selectAll();
      //on peut resaliser des traitements avant affichage
      return $result;
    }

    public function verifConnexion($email, $mdp) {
      return $this->unModel->verifConnexion($email, $mdp);
    }

    public function inscription($tab) {
        $this->unModel->inscription($tab);
    }
    
    public function insertObjet($tab) {
        $this->unModel->insertObjet($tab);
    }

    public function deleteObjet($idobjet) {
        $this->unModel->deleteObjet($idobjet);
    }

    public function selectObjet() {
        return $this->unModel->selectObjet();
    }


  }
 ?>
