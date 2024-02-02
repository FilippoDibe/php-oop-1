<?php
class Movie {
    public $nome;
    public $durata;
    public $generi;

    public function __construct($nome, $durata, $generi) {
        $this->nome = $nome;
        $this->durata = $durata;
        $this->generi = $generi;
    }
    
    public function mostraFilm() {
        echo "Titolo: " . $this->nome . "<br>" . "Durata: " . $this->durata . "<br>" . "Generi: " . implode(", ", $this->generi) . "<br>";
 
    }
};

// Creo le istanze dei film
$film1 = new Movie("Prova a Prendermi", "114 minuti", ["biografico" , "drammatico"]);
$film1->mostraFilm();

$film2 = new Movie("The Wolf of Wall Street", "180 minuti", ["giallo", "commedia"]);
$film2->mostraFilm();
?>


