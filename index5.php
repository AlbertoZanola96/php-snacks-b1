<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->
<?php

    $testo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloribus, accusamus. Dolorum doloribus deserunt. quas quasi assumenda ab fugiat amet. recusandae magnam quam error numquam sunt explicabo! Molestias eveniet neque architecto?';
    $frasi = explode('.', $testo);
    echo $testo . '<br/>';
    foreach ($frasi as $key => $frase) {
        echo '<br/>' . $frase . '<br/>';
    }
?>

