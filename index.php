<?php

include('confing.php'); 

$select=$connection->prepare('SELECT * FROM chart');
$select->execute();
$posts=$select->fetchAll(PDO::FETCH_ASSOC);

// var_dump($posts);



?>


<!DOCTYPE html>
<html  dir="rtl">
<head>
     <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- style -->
    <liink rel='stylesheet' href='style/style.css'>
    
    <!-- Fontawsome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" >
    <title>| </title>
</head>
<body>
<?php foreach($posts as $chart):
      ?>
       <!-- <h1></h1> -->
<h1><?= $chart['chart']?></h1>

      <?php endforeach; ?>
            
 <?php foreach($posts as $chart):
      ?>
       <!-- <h1></h1> -->
<h1><?= $chart['chart']?></h1>

      <?php endforeach; ?>
</form>
   <form method="post" action="data.php" name="signup-form">
<br>
<br><br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <input class='chart' type='text' name='chart'>

   <button class='button' type="submit" name="sub" value="register"> submit</button>

  </html>
</body>

