<!DOCTYPE html>
<html>
<head>
  <title>VOTE Presiden SETEMPAT</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div style="height:50px;"></div>
  <div class="well" style="margin:auto; padding:auto; width:80%;">
  <span style="font-size:25px; color:blue"><center><strong>Suara Untuk Depok</strong></center></span> 
 
    <div style="height:50px;"></div>
    <table class="table table-striped table-bordered table-hover">
      <thead>
        <th>Id</th>
        <th>Nama calon Presiden</th>
        <th>Total Suara</th>
        <th>Aksi</th>
      </thead>
      <tbody>
      <?php
        include('conn.php');
        
        $query=mysqli_query($conn,"select * from `kandidat`");
        while($row=mysqli_fetch_array($query)){
          ?>
          <tr>
            <td><?php echo $row['id_kandidat']; ?></td>
            <td><?php echo $row['nama']; ?></td>
            <td><?php echo $row['total_suara']; ?></td>
            <td>
              <a href="#edit<?php echo $row['id_kandidat']; ?>" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span>Tambah Suara</a>
        
              <?php include('button.php'); ?>
            </td>
          </tr>
          <?php
        }
      
      ?>
      </tbody>
    </table>
  </div>

</div>
</body>
</html>