<?php
  define("TITLE", "Array Keyword");

  $arr = array(
          "Keyword1" => array(
            age => 40,
            netWorth => 22500,
            name => "Name1",
            surname => "Surname1",
            isLive => true
          ),

          "Keyword2" => array(
            age => 50,
            netWorh => 1,
            name => "Name2",
            surname => "Surname2",
            isLive => false
          )

        )
?>

<!DOCTYPE html>
<html>
  <head>
    <title><?php echo TITLE ?></title>
  </head>

  <body>
    <?php
      foreach($arr as $item => $a){
        echo  $item . " Age is : $a[age]  <br>";
        echo  "Net Worth is : $a[netWorth]  <br>";
        echo  "Name is : $a[name]  <br>";
        echo  "Surname is : $a[surname]  <br>";
        echo  "Is Live ? : ";
        if($a[isLive]){
            echo " Yes";
        }else{
          echo " No";
        };
        echo "<br><center>-----</center><br>";
      }
     ?>
  </body>
</html>
