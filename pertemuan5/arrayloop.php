<?php

$angka = [23, 53, 85, 234, 890, 27, 43, 23];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array looping</title>
  <style>
    .kotak {
      width: 50px;
      height: 50px;
      background-color: salmon;
      margin: 3px;
      line-height: 50px;
      text-align: center;
      float: left;
    }

    .clear {
      clear: both;
    }
  </style>
</head>

<body>

  <?php for ($i = 0; $i < count($angka); $i++) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
  <?php } ?>

  <div class="clear"></div>

  <?php foreach ($angka as $a) : ?>
    <div class="kotak"><?php echo $a; ?></div>
  <?php endforeach; ?>



</body>

</html>