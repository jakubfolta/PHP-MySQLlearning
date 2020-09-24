<!-- <?php
$products = array( array('TIR', 'Tires', 100 ),
            array('OIL', 'Oil', 10 ),
            array('SPK', 'Spark Plugs', 4 ) );
echo '|'.$products[0][0].'|'.$products[0][1].'|'.$products[0][2].'|<br />';
echo '|'.$products[1][0].'|'.$products[1][1].'|'.$products[1][2].'|<br />';
echo '|'.$products[2][0].'|'.$products[2][1].'|'.$products[2][2].'|<br />';

$cars = array("BMW", "Mercedes", "Volkswagon", "Ferrari","Ford");
sort($cars);
echo "The sorted list of cars are following: <br/>";
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
   echo $cars[$x];
   echo "<br>";
}
echo "<br/>";
rsort($cars);
echo "The reverse sorted list of cars are following: <br/>";
$rlength = count($cars);
for($x = 0; $x < $rlength; $x++) {
   echo $cars[$x];
   echo "<br>";
}

?> -->


<?php
// create short variable name
$document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
 <head>
   <title>Bob's Auto Parts - Order Results</title>
 </head>
 <body>
  <h1>Bob's Auto Parts</h1>
  <h2>Customer Orders</h2>
  <?php
   $orders= file("$document_root/PHPLearning/orders_details.txt");
   $number_of_orders = count($orders);
   if ($number_of_orders == 0) {
     echo "<p><strong>No orders pending.<br />
           Please try again later.</strong></p>";
   }

   for ($i=0; $i<$number_of_orders; $i++) {
     echo $orders[$i]."<br />";
   }
   ?>
 </body>
</html>


