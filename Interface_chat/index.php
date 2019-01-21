        <?php 
 echo '<p>Salut le monde</p>';

$fp = fopen('test.txt', '+a');
 echo '<p>Salut le monde</p>';

fputs($fp, '1');
fputs($fp, '23');
fclose($fp);
 echo '<p>Salut le monde</p>';

// le contenu de 'data.txt' est maintenant 123 et non 23 !
?>
