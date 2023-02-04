<?php 

    class Movies{

        public $nome;
        public $durata;
        public $voto;
        
    }

    $movie_1 = new Movies();
    $movie_1->nome = "Il signore degli Anelli: La compagnia dell'Anello";
    $movie_1->durata= '2h 58m';
    $movie_1->voto= 5;
 
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
            <div class="col-12 mt-5">
                <h1>
                    <?php 
                        echo "Titolo:"." ".$movie_1->nome;
                    ?>
                </h1>
                <h3>
                    <?php 
                        echo "Durata:"." ".$movie_1->durata;
                    ?>               
                </h3>
                <h3>
                    <?php 
                        echo "Voto:"." ".$movie_1->voto;
                    ?>
                </h3>
            </div>
        </div>
    </div>
</body>
</html>