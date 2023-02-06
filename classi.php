<?php 

include __DIR__.'/attori/movie_1.php';
include __DIR__.'/attori/movie_2.php';
include __DIR__.'/attori/movie_3.php';

    Class Movies{
    
        public $nome;
        public $durata;
        public $voto_originale;
        public $attori;
        public $genere;
        
        function __constructor($nome, $durata, $voto_originale, $attori, $genere){
            $this->nome = $nome;
            $this->durata = $durata;
            $this->voto_originale = $voto_originale;
            $this->attori = $attori;
            $this->genere = $genere;
        }
        
        
        //funzione per trasformare voto da decimi in quinti
        public function setVoto($voto){
            $this-> voto_2 = $voto/2; //bisogna dare un nuovo valore al valore di this. 
            
        }
        
        public function getVoto(){
            
            return $this->voto_2;
            
        }
        
    }

    class Genere{

        public $nome;

        function __constructor($nome){
            $this->nome = $nome;
        }
    }

    $fantasy = new Genere('Fantasy');

    

    $nome_1 = "Il signore degli Anelli: La compagnia dell'Anello";
    $durata_1= '2h 58m';
    $voto_originale_1 = 9;
    $attori_1 = $film1;
    $genere_1 = 'Fantasy';
    $movie_1 = new Movies($nome_1,$durata_1, $voto_originale_1, $attori_1, $genere_1 );
    $nome_2 = "Il signore degli Anelli: Le due Torri";
    $durata_2= '2h 59m';
    $voto_originale_2 = 9;
    $attori_2 = $film2;
    $genere_2 = 'Fantasy';
    $movie_2 = new Movies($nome_2, $durata_2, $voto_originale_2, $attori_2, $genere_2);
    $nome_3 = "Il signore degli Anelli: Il ritorno Del Re";
    $durata_3= '3h 30m';
    $voto_originale_3 = 10;
    $attori_3 = $film3;
    $genere_3 = 'Fantasy';
    $movie_3 = new Movies($nome_3,$durata_3, $voto_originale_3, $attori_3, $genere_3);
    
    $movie_1->setVoto( $voto_originale_1); // qua posso passarli il voto originale ma solo con la freccia.
    $movie_2->setVoto( $voto_originale_2);
    $movie_3->setVoto( $voto_originale_3);
    
 
    
    ?>