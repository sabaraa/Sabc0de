

<!DOCTYPE html>
<html>
<body>
<h3>Data diri calon Peserta bootcamp arcademy Batch 10</h3>

<h3> versi 1</h3>
<p id="cek"></p><br> 
<hr> 

<script>
     var Data = {
                        nama:'Teguh Sabara', // string
                        alamat:'Kp sindangkarsa Rt01/07 no.128', // string
                        hobi:['Begadang','Menghayal','Makan'], //array
                        status:false, // boolean
                        pendidikan:[ // objek
                                {sekolah:'SMK Taruna Bhakti Depok', universitas:'UI'},
                                {sekolah:'SMK Penerbangan Depok', universitas:'BINUS'},
                                {sekolah:'SMK Negri 1 Depok', universitas:'PNJ'},
                                {sekolah:'SMK Mutiara Depok', universitas:'UNJ'}
                        ],
                        skill:[ // objek
                                {bahasa_pemrograman:'Php', framework:'Codeigniter'},
                                {bahasa_pemrograman:'Java', framework:'Laravel'},
                                {bahasa_pemrograman:'C', framework:'Slim'},
                                {bahasa_pemrograman:'C#', framework:'Symfony'}
                        ]
                   };
                    
    var cek_status;
     
    if(Data.status){
        cek_status = "sudah nikah";
    }else{
        cek_status = "belum nikah";
    }
    document.write("<h3>Versi 2</h3>");
    document.write("Nama : "+Data.nama+"<br />");
    document.write("Alamat : "+Data.alamat+"<br />");
    document.write("Hobi : "+Data.hobi[1]+"<br />");
    document.write("Status : "+cek_status+"<br />");
    // document.write("<ol>");
    document.write("Riwayat pendidikan :");
    for(var i=0; i<Data.pendidikan.length; i++){
        document.write("<li>Asal sekolah " + Data.pendidikan[i].sekolah + " kuliah di " + Data.pendidikan[i].universitas + "</li>");
    }
    // document.write("</ol>");

    // document.write("<ol>");
    document.write("Skill / Kemampuan :");
    for(var i=0; i<Data.pendidikan.length; i++){
        document.write("<li>bahasa_pemrograman " + Data.skill[i].bahasa_pemrograman + " framework yg di kuasai " + Data.skill[i].framework + "</li>");
    }
    document.write("<hr>");

    document.write("<h3>Versi 3</h3>");
    document.write("Nama : "+Data.nama+"<br />");
    document.write("Alamat : "+Data.alamat+"<br />");
    document.write("Hobi : "+Data.hobi[1]+"<br />");
    document.write("Status : "+cek_status+"<br />");
    document.write("Riwayat pendidikan : ");
    document.write("<li>Asal sekolah " + Data.pendidikan[0].sekolah + " kuliah di " + Data.pendidikan[0].universitas + "</li>");
    document.write("Skill / Kemampuan :");
        document.write("<li>bahasa pemrograman "  + Data.skill[0].bahasa_pemrograman + " framework yg di kuasai " + Data.skill[0].framework + "</li>");


    var myJSON = JSON.stringify(Data);
    document.getElementById("cek").innerHTML = myJSON;
</script>

</body>
</html>
