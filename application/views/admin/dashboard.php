  <div class="content-wrapper">
    <section class="content container-fluid">
    	<div class="row">
    		<div class="col-md-12">
                <?php if($this->session->flashdata('info')) { ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Berhasil!</h4>
                    <?= $this->session->flashdata('info');?>
                </div>
                <?php } ?>
    			<div class="box">
    				<div class="box-header width-border">
    					<h3 class="box-title">
    						Daftar Sewa Mobil
    					</h3>
    				</div>
    				<div class="box-body">
    					<table class="table table-bordered">
    						<thead>
    							<th>No</th>
                                <th>Nama Penyewa</th>
                                <th>alamat</th>
                                <th>telpon</th>
                                <th>Jenis Mobil</th>
                                <th>Masa sewa</th>
                                <th>Harga</th>
                                <th>Aksi</th>
    						</thead>
    						<tbody>
    							<?php $no=1; foreach ($sewa as $sw) {?>
    							<tr>
    								<td><?php echo $no++?></td>
                                    <td><?php echo $sw->nama?></td>
                                    <td><?php echo $sw->alamat?></td>
                                    <td><?php echo $sw->telpon?></td>
                                    <td><?php echo $sw->jenis_mobil?></td>
                                    <td><?php echo $sw->masa_sewa?></td>
                                    <td><?php echo $sw->harga?></td>
    								<td>
    									<button class="btn btn-warning" data-toggle="modal" data-target="#modaledit<?= $sw->idsewa ;?>"><i class="fa fa-pencil"></i></button>
    									<a href="<?= base_url('Dashboard/hapus/') ; ?><?= $sw->idsewa ; ?>" class="btn btn-danger" onclick= "return confirm('yakin ingin menghapus Data'); " ><i class="glyphicon glyphicon-trash"></i></a>
    								</td>
    							</tr>
    							<?php } ?>
    						</tbody>
    					</table>
    				</div>
    			</div>
    			<button class="btn btn-primary" data-toggle="modal" data-target="#modaltambah"><i class="fa fa-plus"> Tambah Sewa</i></i></button>
    		</div>
    	</div>
    </section>
  </div>

  <div class="modal fade" id="modaltambah" >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Tambah Sewa</h4>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('dashboard/tambah') ;?>" method="post">
                <div class="form-group">
                    <label for="nama">Nama Penyewa</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama " required>
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                    <label for="telpon">Telpon</label>
                    <input type="number" name="telpon" class="form-control" id="telpon" placeholder="Telpon " required>
                </div>
                <div class="form-group">
                    <label>Jenis Mobil</label>
                    <select name="jenis_mobil" class="form-control select2" style="width: 500px" required>
                        <option></option>
                        <?php foreach ($jenis_mobil as $jns) { ?>
                        <option value= "<?= $jns->jenis_mobil ?>" name="jenis_mobil"><?= $jns->jenis_mobil ?></option>
                       <?php } ?> 
                    </select>
                </div>
                <div class="form-group">
                    <label for="masa_sewa">Masa sewa</label>
                    <input type="number" name="masa_sewa" class="form-control" id="masa_sewa" placeholder="masa_sewa " required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga " required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<?php foreach ($sewa as $sw) { ?>
<div class="modal fade" id="modaledit<?php echo $sw->idsewa ?>" >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Edit Sewa</h4>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('Dashboard/update'); ?>" method="post">
                <input type="hidden" name="idsewa" value="<?= $sw->idsewa ?>">
                <div class="form-group">
                    <label for="nama">Nama Penyewa</label>
                    <input type="text" value="<?php echo $sw->nama ?>" name="nama" class="form-control" id="nama" placeholder="Nama " required>
                </div>
                <div class="form-group">
                    <label for="alamat">alamat</label>
                    <input type="text" value="<?php echo $sw->alamat ?>" name="alamat" class="form-control" id="alamat" placeholder="Alamat" required>
                </div>
                <div class="form-group">
                    <label for="telpon">Telpon</label>
                    <input type="number" value="<?php echo $sw->telpon ?>" name="telpon" class="form-control" id="telpon" placeholder="Telpon " required>
                </div>
                <div class="form-group">
                    <label>Jenis Mobil</label>
                    <select name="jenis_mobil" class="form-control select2" style="width: 500px" required>
                        <option value="<?= $jns->jenis_mobil ?>" name="jenis_mobil" selected="selected" ><?php echo $sw->jenis_mobil?></option>
                        <?php foreach ($jenis_mobil as $jns) { ?>
                        <option value= "<?= $jns->jenis_mobil ?>" name="jenis_mobil"><?= $jns->jenis_mobil ?></option>
                       <?php } ?> 
                    </select>
                </div>
                <div class="form-group">
                    <label for="masa_sewa">Masa sewa</label>
                    <input type="number" value="<?php echo $sw->masa_sewa ?>" name="masa_sewa" class="form-control" id="masa_sewa" placeholder="masa_sewa " required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="number" value="<?php echo $sw->harga ?>" name="harga" class="form-control" id="harga" placeholder="Harga " required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<?php } ?>