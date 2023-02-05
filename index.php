<?php 

    include __DIR__.'/classi.php'


    // class Movies{

    //     public $nome;
    //     public $durata;
    //     public $voto_originale;
    //     public $attori;
        
    //     function __constructor($_nome, $_durata, $_voto_originale, $_attori){
    //         $this->nome = $_nome;
    //         $this->durata = $_durata;
    //         $this->voto_originale = $_voto_originale;
    //         $this->attori = $_attori;
    //     }


    //     //funzione per trasformare voto da decimi in quinti
    //     public function setVoto($voto){
    //         $this-> voto_2 = $voto/2; //bisogna dare un nuovo valore al valore di this. 

    //     }

    //     public function getVoto(){

    //         return $this->voto_2;

    //     }
        
    // }

    // $nome_1 = "Il signore degli Anelli: La compagnia dell'Anello";
    // $durata_1= '2h 58m';
    // $voto_originale_1 = 9;
    // $attori_1 = ['Elijan Wood', 'Ian McKellen', 'Liv Tyler', 'Viggo Mortense', 'Sean Astin', 'Cate Blanchett', 'John Rhys-Davies', 'Billy Boyd', 'Dominic Monaghan', 'Orlando Bloom', 'Christoper Lee','Hugo Weaving','Sean Bean', 'Ian Holm'. 'Andy Serkis'];
    // $movie_1 = new Movies($nome_1,$durata_1, $voto_originale_1, $attori_1 );
    // $nome_2 = "Il signore degli Anelli: Le due Torri";
    // $durata_2= '2h 59m';
    // $voto_originale_2 = 9;
    // $attori_2 = ['Elijan Wood', 'Ian McKellen', 'Liv Tyler', 'Viggo Mortense', 'Sean Astin', 'Cate Blanchett', 'John Rhys-Davies','Bernad Hill', 'Miranda Otto', 'Karl Urban', 'David Wenham','Brad Dourif', 'Billy Boyd', 'Dominic Monaghan', 'Orlando Bloom', 'Christoper Lee','Hugo Weaving', 'Andy Serkis'];
    // $movie_2 = new Movies($nome_2, $durata_2, $voto_originale_2, $attori_2);
    // $nome_3 = "Il signore degli Anelli: Il ritorno Del Re";
    // $durata_3= '3h 30m';
    // $voto_originale_3 = 10;
    // $attori_3 = ['Elijan Wood', 'Ian McKellen', 'Liv Tyler', 'Viggo Mortense', 'Sean Astin', 'Cate Blanchett', 'John Rhys-Davies','Bernad Hill', 'Miranda Otto', 'Karl Urban', 'David Wenham','Brad Dourif', 'Billy Boyd', 'Dominic Monaghan', 'Orlando Bloom', 'Christoper Lee','Hugo Weaving', 'Andy Serkis', 'Sean Bean' , 'John Noble'];
    // $movie_3 = new Movies($nome_3,$durata_3, $voto_originale_3, $attori_3);

    // $movie_1->setVoto( $voto_originale_1); // qua posso passarli il voto originale ma solo con la freccia.
    // $movie_2->setVoto( $voto_originale_2);
    // $movie_3->setVoto( $voto_originale_3);

    // con i costrutti è più pulito il codice in HTML

    

 
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
<body class="bg-primary">

        <div class="container border my-5 p-5 rounded-3 bg-light">
            <div class="row p-4">
                <div class="col-12 text-center text-danger mt-4">
                    <h1>Trilogia Signore degli Anelli</h1>
                </div>
                <div class="col-12 mt-5">
                    <div>
                        <h2 class="text-primary"><?php  echo $nome_1;?></h2>
                        <p><?php  echo "<strong class='text-danger'>Durata:</strong>"." ".$durata_1;?></p>
                        <p><?php echo "<strong class='text-danger'>Voto in decimi:</strong>"." ".$voto_originale_1."<br>"."<strong class='text-danger'>Voto in quinti:</strong>"." ".$movie_1->getVoto();?></p>
                        <p><?php echo "<strong class='text-danger'>Attori:</strong>"." ".implode(", ",$attori_1); ?></p>
                    </div>
                    <div class="mt-4">
                        <h2 class="text-primary"><?php  echo $nome_2;?></h2>
                        <p><?php  echo "<strong class='text-danger'>Durata:</strong>"." ".$durata_2;?></p>               
                        <p><?php echo "<strong class='text-danger'>Voto in decimi:</strong>"." ".$voto_originale_2."<br>"."<strong class='text-danger'>Voto in quinti:</strong>"." ".$movie_2->getVoto();?></p>
                        <p><?php echo "<strong class='text-danger'>Attori:</strong>"." ".implode(", ",$attori_2); ?></p>
                    </div>
                    <div class="mt-4">
                        <h2 class="text-primary"><?php  echo $nome_3;?></h2>
                        <p><?php  echo "<strong class='text-danger'>Durata:</strong>"." ".$durata_3;?></p>
                        <p><?php echo "<strong class='text-danger'>Voto in decimi:</strong>"." ".$voto_originale_3."<br>"."<strong class='text-danger'>Voto in quinti:</strong>"." ".$movie_3->getVoto();?></p>
                        <p><?php echo "<strong class='text-danger'>Attori:</strong>"." ".implode(", ",$attori_3); ?></p>
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