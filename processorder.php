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
      echo ($grade >= 40 ? '<p style="color:green"> Your score is ' .$grade. '. You passed the examination!! </p>' : '<p style="color:red"> Your score is ' .$grade. '. You failed the examination!! </p>')

      # Type operator

      class sampleClass{};
      $myObject = new sampleClass();
      if ($myObject instanceof sampleClass)
       echo  "myObject is an instance of sampleClass";


    ?>
  </body>
</html>