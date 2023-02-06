<?php 

    include __DIR__.'/classi.php';   

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
                    <?php 

                         
                    ?>

                    <div>
                        <h2 class="text-primary"><?php  echo $nome_1;?></h2>
                        <p><?php  echo "<strong class='text-danger'>Durata:</strong>"." ".$durata_1;?></p>
                        <p><?php echo "<strong class='text-danger'>Voto in decimi:</strong>"." ".$voto_originale_1."<br>"."<strong class='text-danger'>Voto in quinti:</strong>"." ".$movie_1->getVoto();?></p>
                        <p><?php echo "<strong class='text-danger'>Attori:</strong>"." ".implode(", ",$attori_1); ?></p>
                        <p><?php  echo "<strong class='text-danger'>Genere:</strong>"." ".$genere_1;?></p>
                    </div>
                    <div class="mt-4">
                        <h2 class="text-primary"><?php  echo $nome_2;?></h2>
                        <p><?php  echo "<strong class='text-danger'>Durata:</strong>"." ".$durata_2;?></p>               
                        <p><?php echo "<strong class='text-danger'>Voto in decimi:</strong>"." ".$voto_originale_2."<br>"."<strong class='text-danger'>Voto in quinti:</strong>"." ".$movie_2->getVoto();?></p>
                        <p><?php echo "<strong class='text-danger'>Attori:</strong>"." ".implode(", ",$attori_2); ?></p>
                        <p><?php  echo "<strong class='text-danger'>Genere:</strong>"." ".$genere_2;?></p>
                    </div>
                    <div class="mt-4">
                        <h2 class="text-primary"><?php  echo $nome_3;?></h2>
                        <p><?php  echo "<strong class='text-danger'>Durata:</strong>"." ".$durata_3;?></p>
                        <p><?php echo "<strong class='text-danger'>Voto in decimi:</strong>"." ".$voto_originale_3."<br>"."<strong class='text-danger'>Voto in quinti:</strong>"." ".$movie_3->getVoto();?></p>
                        <p><?php echo "<strong class='text-danger'>Attori:</strong>"." ".implode(", ",$attori_3); ?></p>
                        <p><?php  echo "<strong class='text-danger'>Genere:</strong>"." ".$genere_3;?></p>
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