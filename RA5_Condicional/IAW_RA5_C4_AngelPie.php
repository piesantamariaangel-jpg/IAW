
<?php
$nota = 7.5;
define("NOTA_APROVAT", 5);

if ($nota >= NOTA_APROVAT) {
    echo "La teva nota és " . $nota . ". Has aprovat";
} else {
    echo "La teva nota és " . $nota . ". Has suspès";
}
?>
