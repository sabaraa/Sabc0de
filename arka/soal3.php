<!-- // var2 nantinya nilainya bisa bertambah / berkurang, sedangkan half tetap -->
<?php  

function acak($no_char){
     
     $no_char;
                
    
    $var1     = floor($no_char / 2);
    $var2 = $var1;
    $output1       = '*';
    $output2       = '#';

    echo '<div style="font:bold 15px courier new; line-height:20px">';

    // loop baris
    for ($row = 1; $row <= $no_char; $row++)
    {
        // loop kolom
        for ($col = 1; $col <= $no_char; $col++)
        {
            $char = $col > $var2 && $col <= ($no_char - $var2) ? $output2 : $output1;
            echo $char; 
        }
        $row <= $var1 ? $var2-- : $var2++; 
        echo '<br/>';
    }
    echo '</div>';
} 

acak(5); // sesuaikan dengan soal



 ?>
