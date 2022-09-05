<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="suman.php" method="GET">
        <input placeholder ="principal" type="number" name="principal"/>
        <input placeholder ="time" type="number" name="time"/>
        <input placeholder ="rate" type="number" name="rate"/>

        <button>Calculate</button>

</form>
  <pre>
    <?php

    $messages = [];

    if(!empty($_GET)){
        if(!isset($_GET['principal'])|| empty($_GET['principal'])){
            $messages[] = "Principal is not set";
         }
         if(!isset($_GET['rate'])|| empty($_GET['rate'])){
            $messages[] = "Rate is not set";
         }
        if(!isset($_GET['time'])|| empty($_GET['time'])){
            $messages[] = "Time is not set";
        }
       $principal = $_GET['principal'];
       $rate = $_GET['rate'];
       $time = $_GET['time'];

      if(!empty($principal) && !empty($rate) && !empty($time)) {
      $si =($principal * $rate * $time) / 100;
      echo sprintf("your simple interest is:%s", $si);
      }
    }
    ?>
  </pre>
    <?php
        foreach($messages as $message) {
            echo $message . "<br/>";
        }
    ?>
        
</body>
</html>