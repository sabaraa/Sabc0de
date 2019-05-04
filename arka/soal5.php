
<?php  

function acak($panjang = 32) {
    $karakter = 'ArkademyBatch10';
    $panjangkarakter = strlen($karakter);
    $acakkarakter = '';
    for ($i = 0; $i < $panjang; $i++) {
        $acakkarakter .= $karakter[rand(0, $panjangkarakter - 1)];
    }
    return $acakkarakter;
}

//looping
$i = 0 ;
$looping = 3;  // sesuaikan set
while ($i++ < $looping)
{
    echo acak()."<br>";
}
 ?>