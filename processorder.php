<!DOCTYPE html>
<html>
  <head>
    <title>Bob's Auto Parts - Order Results</title>
  </head>
  <body>
    <h1>Bob's Auto Parts</h1>
    <h2>Order Results</h2>
    <?php
      echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
      // create short variable names
      $tireqty = $_POST['tireqty'];
      $oilqty = $_POST['oilqty'];
      $sparkqty = $_POST['sparkqty'];

      define('TIREPRICE', 100);
      define('OILPRICE', 10);
      define('SPARKPRICE', 4);

      echo 'Tireprice '.TIREPRICE.'<br />';
      echo 'Oilprice '.OILPRICE.'<br />';
      echo 'Sparkprice '.SPARKPRICE.'<br />';

      echo '<p>Your order is as follows: </p>';
      echo $tireqty. ' Tires<br />';
      echo $oilqty. ' bottles of oil<br />';
      echo $sparkqty. ' spark plugs<br />';
    ?>
  </body>
</html>