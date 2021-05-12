<?php
   include_once __DIR__ . "/classes/genres/tshirt.php";
   include_once __DIR__ . "/classes/genres/smartphone.php";
   include_once __DIR__ . "/classes/genres/computer.php";


   $maglietta = New Tshirt("maglietta", "Fila", 45, "Vestiti", 3.5, "M", "Unisex");
   $iphone = New Smartphone("Iphone", "Apple", 999, "eletronica", 5, true, "black");
   $imac = New Computer("imac", "Apple", 1600, "elettronica", 5, true, 16, 2.7);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Michele's E-commerce</title>
</head>
<body>
   <h1>E-commerce</h1>

   <h4><?php echo $iphone->genre ?></h2>
   <h2><?php echo $iphone->getProductFullName() ?></h2>
   <ul>
      <li>prezzo: <?php echo $iphone->price ?>$</li>
      <li>colore: <?php echo $iphone->color ?></li>
      <li>voto: <?php echo $iphone->vote ?></li>
   </ul>

   <h4><?php echo $maglietta->genre ?></h2>
   <h2><?php echo $maglietta->getProductFullName() ?></h2>
   <ul>
      <li>prezzo: <?php echo $maglietta->price ?>$</li>
      <li>taglia: <?php echo $maglietta->size ?></li>
      <li>voto: <?php echo $maglietta->vote ?></li>
   </ul>

   <h4><?php echo $imac->genre ?></h2>
   <h2><?php echo $imac->getProductFullName() ?></h2>
   <ul>
      <li>prezzo: <?php echo $imac->price ?>$</li>
      <li>CPU: <?php echo $imac->cpu ?>GHz</li>
      <li>voto: <?php echo $imac->vote ?></li>
   </ul>
</body>
</html>