<?php

// $mahasiswa = [
//   ["Andri Adam", 10118792, "3KA32", "sistem informasi", "Andriadam@gmail.com"],
//   ["wrerer rerer", 232323232, "3KA31", "sistem fgfgfgfg", "fgfgfgf@gmail.com"]
// ];

$angka = [
  [1, 3, 4],
  [2, 5, 7],
  [7, 2, 3]
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array dalam kondisi nyata</title>
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

  <h1></h1>


  <?php foreach ($angka as $a) : ?>
    <?php foreach ($a as $b) : ?>
      <div class="kotak"><?= $b ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
  <?php endforeach; ?>


</body>

</html>