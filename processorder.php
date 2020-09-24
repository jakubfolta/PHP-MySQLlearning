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
      # create short variable names
      $tireqty = $_POST['tireqty'];
      $oilqty = $_POST['oilqty'];
      $sparkqty = $_POST['sparkqty'];

      $totalqty = 0;
      $totalqty = $tireqty + $oilqty + $sparkqty;
      echo "<p>Items ordered: ".$totalqty."<br />";
      $totalamount = 0.00;
      define('TIREPRICE', 100);
      define('OILPRICE', 10);
      define('SPARKPRICE', 4);
      $totalamount = $tireqty * TIREPRICE
                  + $oilqty * OILPRICE
                  + $sparkqty * SPARKPRICE;
      echo "Subtotal: $".number_format($totalamount,2)."<br />";
      $taxrate = 0.10;  // local sales tax is 10%
      $totalamount = $totalamount * (1 + $taxrate);
      echo "Total including tax: $".number_format($totalamount,2)."</p>";

      # Using ternary operator

      $grade=30;
      echo ($grade >= 40 ? '<p style="color:green"> Your score is ' .$grade. '. You passed the examination!! </p>' : '<p style="color:red"> Your score is ' .$grade. '. You failed the examination!! </p>');

      # Type operator

      class sampleClass{};
      $myObject = new sampleClass();
      if ($myObject instanceof sampleClass)
      echo "myObject is an instance of sampleClass".'<br />';

      # While loop

      $num = 1;
      while ($num <= 5 ){
        echo $num."<br />";
        $num++;
      }

      # For loop

      for ($num = 1;$num <= 5;$num++){
        echo $num."<br />";
      }

      # Dowhile loop

      $num = 110;
      do{
       echo $num."<br />";
       $num -= 1;
     }while ($num >= 100 ) ;

     # Opening and reading file

     $document_root = $_SERVER['DOCUMENT_ROOT'];

     echo "<b>Bob's Auto Parts</b><br/><br/>";
     echo "<b>Customer Orders</b> <br/><hr/>";

     @$fp = fopen("$document_root/PHPLearning/orders_details.txt", 'rb');
     flock($fp, LOCK_SH); // lock file for reading

     if (!$fp) {
       echo "<p><strong>No orders pending.<br />
             Please try again later.</strong></p>";
       exit;
     }

     while (!feof($fp)) {
        $order= fgets($fp);
        echo htmlspecialchars($order)."<br />";
     }

     flock($fp, LOCK_UN); // release read lock
     fclose($fp);

    ?>
  </body>
</html>