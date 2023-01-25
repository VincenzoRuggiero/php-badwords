<?php 
   $sentence =  $_POST['sentence'];
   $censored =  $_POST['word'];

   $changed = str_ireplace($censored, '***', $sentence)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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

</body>
</html>


