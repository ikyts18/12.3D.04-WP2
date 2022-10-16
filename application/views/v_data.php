<h1><?php echo $judul?></h1>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
    </tr>
    <?php foreach ($bio as $b) {?>
        <tr>
            <td><?php echo $b->nama?></td>
            <td><?php echo $b->jenis_kelamin?></td>
            <td><?php echo $b->alamat?></td>
            <td><?php echo $b->pekerjaan?></td>
        </tr>
    <?php }?>
</table>
<br></br>