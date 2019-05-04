
<?php

$abjad = array("abcd", "abcdef", "abcdefg","abcdefgh");

asort($abjad, SORT_ASC); // mengurutkan array dari yg terpendek ke terpanjang dan dari abjad a-z
$panjang = count($abjad);
for($x = 0; $x < $panjang; $x++) {
    echo $abjad[$x]."<br>";
}

?>

<!-- stuck saya hemmm -->