
    <?php 
   $sentence =  $_POST['sentence'];
   $censored =  $_POST['word'];
    ?>

<h2>
<?php echo $sentence . ',  ' . $censored  ?>
</h2>

<p>
Il paragrafo scritto è lungo <strong><?php echo strlen($sentence);?></strong> caratteri.
</p>

<h2>
<?php echo $sentence . ",  " . str_replace('Jon Snow', '***', $censored)?>
</h2>
<p>
Il paragrafo scritto è lungo <strong><?php echo strlen($sentence);?></strong> caratteri.
</p>


