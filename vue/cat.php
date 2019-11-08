<head> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./css/cat.css">
</head>

<?php
echo '
<table class="table table-white">
';
  foreach ($result as $unResultat) {
      echo
      "
     
          <div class='card border-light'>
            <div class='card-header'>".$unResultat['point']."<img id='coin' src='./vue/coins.png'> </div>
              <div class='card-body'>
                  <h5 class='card-title'>".$unResultat['type']."</h5>
                  <p class='card-text'>".$unResultat['designation']."</p>
              </div>
            </div>
    
      ";
  }
  echo "</table>";
?>