<?php
setlocale(LC_CTYPE, 'fr_FR.UTF-8');
// la construction objet
class Personne {
var $nom, $prenom;
var $age;

function Personne ($n, $p, $a) {
  $this->nom = $n;
  $this->prenom = $p;
  $this->age = $a;
}

public function initiales () {
  return (substr($this->prenom,0,1) . substr($this->nom,0,1)) ;
}

}
// instanciation objet
$p = new Personne('Teule', 'Jean', 36);
// utilisation objet
echo "$p->prenom $p->nom est agé de $p->age ans.\n";
echo $p->initiales();
?>