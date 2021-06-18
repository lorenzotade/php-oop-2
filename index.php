<?php
  require_once __DIR__ . '/classes/Product.php';
  require_once __DIR__ . '/classes/Customer.php';
  require_once __DIR__ . '/classes/PremiumCustomer.php';

  $mela = new Product("Mela", 1.5, "Frutta");
  $mela->desc = "Mele Golden buone.";

  $pera = new Product("Pera", 2.4, "Frutta");
  $pera->desc = "Pere Williams così così.";

  $fagioli = new Product("Fagioli", 0.9, "Legumi");
  $fagioli->desc = "Fagioli Borlotti fanno aria.";

  $maglietta = new Product("Maglietta", 9.9, "Abbigliamento");
  $maglietta->desc = "Maglietta Armani finta.";

  var_dump($mela);
  var_dump($pera);
  var_dump($fagioli);
  var_dump($maglietta);


  $custom1 = new Customer("Ugo", "De Ughi", "ugo.deughi@gmail.com");
  $custom1->setCreditCard(12345678910, "02/23", 123);
  $custom1->setAddress("Via Roma 3", "Milano", 203245, "Italia");
  var_dump($custom1);

  $premCustom1 = new PremiumCustomer("Giueppe", "Verdi", "giuseppe.verdi@gmail.com", "gold");
  $premCustom1->setCreditCard(5432455534545, "04/22", 456);
  $premCustom1->setAddress("Via Matteotti 12", "Ancona", 32564, "Italia");
  var_dump($premCustom1);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-2</title>
</head>
<body>
  <h1>Online Store</h1>
  <h2><?php echo $custom1->buyProduct($maglietta, 2) ?></h2>
  <h2><?php echo $premCustom1->buyProduct($mela, 3) ?></h2>
</body>
</html>