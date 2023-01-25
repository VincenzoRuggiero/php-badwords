
    <?php 
   $sentence =  $_POST['sentence'];
   $censored =  $_POST['word'];

   $changed = str_ireplace($censored, '***', $sentence)
    ?>

<h2>
<?php echo $sentence ?>
</h2>

<p>
Il paragrafo scritto è lungo <strong><?php echo strlen($sentence);?></strong> caratteri.
</p>

<h2>
<?php echo $changed?>
</h2>
<p>
Il paragrafo scritto è lungo <strong><?php echo strlen($changed)?></strong> caratteri.
</p>


