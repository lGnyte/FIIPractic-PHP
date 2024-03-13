<?php
  function abc(){

    return "test";
  }
?>

<html>
  <head></head>
  <body>
    <div>
      <?php
        echo abc();
      ?>
    </div>
    <div>
      <?php
        // include "functii2.php";
        require "functii.php";
        test();
      ?>
    </div>
  </body>
</html>