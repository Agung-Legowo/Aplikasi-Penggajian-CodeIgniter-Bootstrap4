<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?php echo $title ?></h1>

    </div>


    <div class="card" style="width: 60%; margin-bottom: 100px">
 		<div class="card-body">
 			
 			<?php foreach ($pegawai as $p) : ?>
 			<form method="POST" action="<?php echo base_url('admin/dataPegawai/updateDataAksi') ?>" enctype="multipart/form-data">
 				
 				<div class="form-group">
 					<label>NIK</label>
 					<input type="hidden" name="id_pegawai" class="form-control" value="<?php echo $p->id_pegawai ?>">
 					<input type="number" name="nik" class="form-control" value="<?php echo $p->nik ?>">
 					<?php echo form_error('nik','<div class="text-small text-danger"></div>') ?>
 				</div>

 				<div class="form-group">
 					<label>nama pegawai</label>
 					<input type="text" name="nama_pegawai" class="form-control" value="<?php echo $p->nama_pegawai ?>" >
 					<?php echo form_error('nama_pegawai','<div class="text-small text-danger"></div>') ?>
 				</div>

 				<div class="form-group">
 					<label>jenis kelamin</label>
 					<select name="jenis_kelamin" class="form-control">
 						<option value="<?php echo $p->jenis_kelamin ?>"><?php echo $p->jenis_kelamin ?></option>
 						<option value="Laki-Laki">Laki-Laki</option>
 						<option value="prempuan">prempuan</option>
 					</select>
 					<?php echo form_error('jenis_kelamin','<div class="text-small text-danger"></div>') ?>
 				</div>

 				<div class="form-group">
 					<label>Jabatan</label>
 					<select name="jabatan" class="form-control">
 						<option value="<?php echo $p->jabatan ?>"><?php echo $p->jabatan ?></option>
 						<?php foreach($jabatan as $j) : ?>
 						<option value="<?php echo $j->nama_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
 					<?php endforeach; ?>
 					<?php echo form_error('jabatan','<div class="text-small text-danger"></div>') ?>
 						
 					</select>
 				</div>

 				<div class="form-group">
 					<label>Tanggal Masuk</label>
 					<input type="date" name="tanggal_masuk" class="form-control" value="<?php echo $p->tanggal_masuk ?>">
 					<?php echo form_error('tanggal_masuk','<div class="text-small text-danger"></div>') ?>
 				</div>

 				<div class="form-group">
 					<label>Status</label>
 					<select name="Status" class="form-control">
 						<option value="<?php echo $p->status ?>"><?php echo $p->status ?></option>
 						<option value="Pegawai Tetap">Pegawai Tetap</option>
 						<option value="Pegawai Tidak Tetap">Pegawai Tidak Tetap</option>
 					</select>
 					<?php echo form_error('status','<div class="text-small text-danger"></div>') ?>
 				</div>

 				<div class="form-group">
 					<label>Photo</label>
 					<input type="file" name="photo" class="form-control">
 				</div>

 				<button type="submit" class="btn btn-primary">Simpan</button>


 			</form>
 			<?php endforeach; ?>

 		</div>
    </div>

</div>

