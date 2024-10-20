<!DOCTYPE html>
<html>
<body>

<?php
$t = date("D");
echo "<p>To day is " . $t; 

if ($t < "Saturday") {
  echo " and Have a good day!";
} elseif ($t < "Monday") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
 
</body>
</html>