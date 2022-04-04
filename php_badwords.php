<?php 

// php badwords

$frase = "Oggi sono andato a quel cazzo di negozio dove c'è quella commessa rincoglionita che dopo due anni non sa come cazzo si servono i clienti";

$frase_censurata = str_replace ("rincoglionita", "rinc*********", $frase, $numero_censure)("cazzo", "c**o", $frase, $numero_censure);

$numero_censure = 0;

$lunghezza_frase = strlen( $frase );

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    
    <p> Frase volgare: <?php echo $frase?></p>
    <br>
    <p>
        Frase censurata: <?php echo $frase_censurata?>
        La lunghezza della frase è <?php echo $lunghezza_frase?> caratteri
    </p>
    <br>
    <p> Numero di censure: <?php echo $numero_censure?></p>
</body>
</html>