<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Biodata</title>
</head>
<body>
    <center>
        <tr>
            <th>
               Tampil Data Biodata 
            </th>
        </tr>
        <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>
        <tr>
            <th>Nim</th>
            <th>:</th>
            <td>
                <?= $nim; ?>
            </td>
        </tr>
        <br>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
               <?= $nama; ?>
            </td>
        </tr>
        <br>
        <tr>
            <td>Prodi</td>
            <td>:</td>
            <td>
                <?= $prodi; ?>
            </td>
        </tr>
        <br>
        <tr>
            <td colspan="3" align="center">
                <a href="<?= base_url('Bio')    ?>">Kembali</a>
            </td>
        </tr>
    </table>
</center>
</body>
</html>