<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
-che name sia più lungo di 3 caratteri,
-che mail contenga un punto e una chiocciola,
-e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
    $par = $_GET;
    $errori = '';

    if (strlen($par['name']) < 3 ) {
        echo 'ERRORE! NOME TROPPO CORTO!';
        $errori .= 'Errore cod: 01 <br/>';
    }
    else if (strpos($par['mail'], '@') === false || strpos($par['mail'], '.') === false) {
        echo 'ACCESSO NEGATO! CARATTERI FONDAMENTALI: @ . ';
        $errori .= 'Errore cod: 02 <br/>';
    }
    else if (is_numeric($par['age'] ) === false) {
        echo 'ATTENZIONE! INSERIRE UN NUMERO';
        $errori .= 'Errore cod: 03 <br/>';
    }

    if ($errori === '') {
        echo 'ACCESSO RIUSCITO!'; 
    }
    else {
        echo '<br/> SCHEDA ERRORI: <br/>'. $errori;
    }
 
?>