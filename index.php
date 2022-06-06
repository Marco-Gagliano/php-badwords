
<?php 

/* 
  Descrizione:
  1. Creare una variabile con un paragrafo di testo a vostra scelta.
  2. Stampare a schermo il paragrafo e la sua lunghezza.
  3. Una parola da censurare viene passata dall’utente tramite parametro GET.
  4. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
*/

$frase = 'Quando è troppo è troppo! Ne ho abbastanza di questi fottuti serpenti su questo fottuto aereo!';
$lunghezza_frase = strlen($frase);

// PUNTO 3
$censura = $_GET["censura"];
$frase_censurata = str_replace($censura, "***", $frase);
$lunghezza_frase_censurata = strlen($frase_censurata);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP - Bad Words</title>

    
</head>
<body>

  <header>
    <h1>Bad Words</h1>
  </header>

  <main>

    <!-- PUNTO 1 -->
    <h3>Snakes On A Plane: frase celebra (incensurata)</h3>
    <p><?php echo $frase ?> </p>

    <!-- PUNTO 2 -->
    <p>La frase incensurata contiene <?php echo $lunghezza_frase ?> caratteri tra spazi e lettere</p>

    <!-- PUNTO 4 -->
    <h3>Snakes On A Plane: frase celebra (censurata)</h3>
    <p><?php echo $frase_censurata ?> </p>
    <p>La frase censurata contiene <?php echo $lunghezza_frase_censurata ?> caratteri tra spazi e lettere</p>

  </main>

  <footer></footer>


  
</body>
</html>