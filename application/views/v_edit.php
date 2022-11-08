<main role="main" class="container">
    <div class="card">
        <div class="card-header"><h4><?php echo $judul?></h4></div>
			<div class="card-body">
			<?php   
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>
			<form method="post" action="<?php echo base_url(); ?>web/update">
				<input type="hidden" name="id" id="id" value="<?php echo $biodata->id; ?>"/>
				<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" value="<?php echo $biodata->nama; ?>" class="form-control" id="nama" name="nama">
				</div>

				<div class="form-group">
					<label for="jenis_kelamin">Jenis Kelamin</label>
					<select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
						<option value="pria" <?php echo ($biodata->jenis_kelamin ? 'pria' : 'selected' ); ?> >Pria</option>
						<option value="wanita" <?php echo ($biodata->jenis_kelamin ? 'wanita' : 'selected' ); ?>>Wanita</option>
					</select>
				</div>

				<div class="form-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" name="alamat" id="alamat"><?php echo $biodata->alamat; ?></textarea>
				</div>

                <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
					<input type="text" value="<?php echo $biodata->pekerjaan; ?>" class="form-control" id="pekerjaan" name="pekerjaan">
				</div>

				<button type="submit" class="btn btn-primary">Update</button>
			</form>
			</div>
		</div>
	</div>