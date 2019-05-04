 <?php
    // Membuat variabel
    $nama="Teguh Sabara";
    $username="teguhsab";
    $pass = "asBBss99";
    $namaErr = "";
    $usernameErr = "";
    $passErr = "";
    $username_valid = true;
    $username_valid_msg = "";
    $pass_valid = true;
    $pass_valid_msg = "";
    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number    = preg_match('@[0-9]@', $pass);
    
        if(empty($nama)){
            $namaErr = "Nama masih kosong.<br>";
        }else{
            $namaErr = "Nama Sudah Valid.<br>";
        }
        if(empty($username)){
            $usernameErr = "Username masih kosong.<br>";
        }else{
            $usernameErr = "Username sudah valid.<br>";
        }

        // Kode cek username hanya boleh huruf a-z kecil
        if(!preg_match("/^[a-z]{8,8}$/",$username)){
            $username_valid = false;
            $username_valid_msg = "Username, merupakan kombinasi dari huruf kecil. Dengan panjang tepat 8 karakte<br>";
        }else{
            $username_valid_msg = "Username benar";
        }
        if(!preg_match('/^[a-zA-Z0-9]{8,12}$/',$pass)){
            $pass_valid = false;
            $pass_valid_msg = "Password, merupakan kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang minimal 8 karakter max 12<br>";
        }else{
          $pass_valid_msg = "Password Benar";
        }
        
        // Cek semua input sudah diisi apa belum
        if( !empty($nama) and !empty($username) and !empty($pass) and $username_valid and $pass_valid ){
            // Disini tempat menulis kode (semua syarat sudah input terpenuhi).
            // Misalnya menulis kode query ke database
           $benar ="Selamat semua input sudah diisi dengan benar.<br>";
        }else{
           $benar = "ada kesalahan input data";
        }

        
    
?>

<h3>keterangan: <?php  echo $benar ;?></h3>
<h5>username : <?php  echo $namaErr ;?></h5> 
<h5>username : <?php  echo $username_valid_msg ;?></h5>
<h5>password : <?php  echo $pass_valid_msg; ?></h5>
<p>nama : <?php  echo $nama; ?></p>
<p>username :<?php  echo $username; ?></p>
<p>password : <?php  echo $pass; ?></p>
<p><P>NB:</P>Username, merupakan kombinasi dari huruf kecil. Dengan panjang tepat 8 karakter.
Password, merupakan kombinasi dari huruf kecil, huruf besar, angka, dan karakter spesial. Dengan panjang minimal 8 MAX 12karakter.
</p>
