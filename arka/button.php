<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['id_kandidat']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from user where id_kandidat='".$row['id_kandidat']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>nama: <strong><?php echo $drow['nama']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['id_kandidat']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id_kandidat']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Tambah Suara</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$add=mysqli_query($conn,"select * from kandidat where id_kandidat='".$row['id_kandidat']."'");
					$erow=mysqli_fetch_array($add);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['id_kandidat']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">nama:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="nama" class="form-control" value="<?php echo $erow['nama']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">total_suara:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="total_suara" class="form-control" value="<?php echo $erow['total_suara']; ?>">
						</div>
					</div>
						<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Tambah Suara Anda:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="add" class="form-control" value="1">
						</div>
					</div>
					<div style="height:10px;"></div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->