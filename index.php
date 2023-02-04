<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    class Movies{

        public $nome;
        public $durata;
        public $voto_originale;
        
        function __constructor($_nome, $_durata, $_voto_originale){
            $this->nome = $_nome;
            $this->durata = $_durata;
            $this->voto_originale = $_voto_originale;
        }

        public function setVoto($voto){
            $this-> voto_2 = $voto/2; //bisogna dare un nuovo valore al valore di this. 

        }

        public function getVoto(){

            return $this->voto_2;

        }
        
    }

    $movie_1 = new Movies();
    $movie_1->nome = "Il signore degli Anelli: La compagnia dell'Anello";
    $movie_1->durata= '2h 58m';
    $movie_1->voto_originale = 9;
    $movie_2 = new Movies();
    $movie_2->nome = "Il signore degli Anelli: Le due Torri";
    $movie_2->durata= '2h 59m';
    $movie_2->voto_originale = 9;
    $movie_3 = new Movies();
    $movie_3->nome = "Il signore degli Anelli: Il ritorno Del Re";
    $movie_3->durata= '3h 30m';
    $movie_3->voto_originale = 10;

    $movie_1->setVoto( $movie_1->voto_originale); // qua posso passarli il voto originale ma solo con la freccia.
    $movie_2->setVoto( $movie_2->voto_originale);
    $movie_3->setVoto( $movie_3->voto_originale);

    

    

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>PHP OOP  parte uno</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-danger mt-4">
                <h1>Trilogia Signore degli Anelli</h1>
            </div>
            <div class="col-12 mt-5">
                <div>
                    <h2><?php  echo "Titolo:"." ".$movie_1->nome;?></h2>
                    <h3><?php  echo "Durata:"." ".$movie_1->durata;?></h3>
                    <h3><?php echo "Voto in decimi:"." ".$movie_1->voto_originale."<br>"."Voto in quinti:"." ".$movie_1->getVoto();?></h3>
                </div>
                <div class="mt-4">
                    <h2><?php  echo "Titolo:"." ".$movie_2->nome;?></h2>
                    <h3><?php  echo "Durata:"." ".$movie_2->durata;?></h3>               
                    <h3><?php echo "Voto in decimi:"." ".$movie_2->voto_originale."<br>"."Voto in quinti:"." ".$movie_2->getVoto();?></h3>
                </div>
                <div class="mt-4">
                    <h2><?php  echo "Titolo:"." ".$movie_3->nome;?></h2>
                    <h3><?php  echo "Durata:"." ".$movie_3->durata;?></h3>
                    <h3><?php echo "Voto in decimi:"." ".$movie_3->voto_originale."<br>"."Voto in quinti:"." ".$movie_3->getVoto();?></h3>
                </div>
                <div>
                    <h3 class="text-danger">
                        <?php ?>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>