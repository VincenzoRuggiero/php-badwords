
    <?php 

   $words =  $_POST['words'];
   $censored =  $_POST['sentence'];


   

    ?>

<h2>
<?php echo $words;  ?>
</h2>

<p>
Il paragrafo scritto è lungo <strong><?php echo strlen($words);?></strong> caratteri.
</p>


