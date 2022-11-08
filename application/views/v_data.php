<main role="main" class="container">
    <div class="card">
        <div class="card-header"><h4><?php echo $judul?></h4></div>
        <div class="card-body"><a href="<?php echo base_url();?>web/create" class="btn btn-success">Tambah Data</a></div>
    </div>
        <table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($bio as $b) {?>
        <tr>
            <td><?php echo $b->nama?></td>
            <td><?php echo $b->jenis_kelamin?></td>
            <td><?php echo $b->alamat?></td>
            <td><?php echo $b->pekerjaan?></td>
            <td>
                <a href="<?php echo base_url(); ?>web/edit/<?php echo $b->id; ?>" class="btn btn-warning">Edit</a>
                <a href="<?php echo base_url();?>web/hapus/<?php echo $b->id;?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>

    <?php }?>
</main>

</table>
<br></br>
