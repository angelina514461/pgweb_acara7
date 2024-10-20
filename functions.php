<!DOCTYPE html>
<html>
<body>

<?php
function printMessage() {
    echo "Hello, this is a simple message!<br>";
}

function greetUser($name) {
    echo "Hello, " . $name . "!<br>";
}


printMessage();

greetUser("Angelina");

?>

</body>
</html>