<?php
$repeticions = 4;

$i = 1;

do {
    echo "<p>Volta $i</p>";
    $i++;
} while ($i <= $repeticions);

$repeticions = 0;
$i = 1;

do {
    echo "<p>Volta $i</p>";
    $i++;
} while ($i <= $repeticions);

$i = 1;

while ($i <= $repeticions) {
    echo "<p>Volta $i</p>";
    $i++;
}
?>
