<!DOCTYPE html>
<html>
<body>

<?php
$data = [
    ["San", 25, "Namhae"],
    ["Seonghwa", 26, "Jinju"],
    ["Mingi", 25, "Incheon"]
];


echo "<table border='1' style='width: 50%; margin: 20px auto;'>";
echo "<tr><th>Name</th><th>Age</th><th>City</th></tr>";


foreach ($data as $row) {
    echo "<tr>";
    echo "<td>$row[0]</td>"; 
    echo "<td>$row[1]</td>"; 
    echo "<td>$row[2]</td>"; 
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
