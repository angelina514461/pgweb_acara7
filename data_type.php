<!DOCTYPE html>
<html>
<body>

<?php
$integer = 42;
echo "Integer: $integer<br>";

$float = 3.14;
echo "Float: $float<br>";

$string = "Hello, Ell!";
echo "String: $string<br>";

$booleanTrue = true;
$booleanFalse = false;
echo "Boolean (true): " . ($booleanTrue ? 'true' : 'false') . "<br>";
echo "Boolean (false): " . ($booleanFalse ? 'true' : 'false') . "<br>";

$array = [1, 2, 3, "four"];
echo "Array: ";
print_r($array);
echo "<br>";

$nullVar = null;
echo "Null: ";
var_dump($nullVar);
?>

</body>
</html>