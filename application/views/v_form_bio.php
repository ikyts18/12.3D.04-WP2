<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Biodata</title>
</head>
<body>
    <center>
        <form action= "<?= base_url('Bio/cetak') ?>" method="post">
            <table>
                 <tr>
                    <th colspan="3">
                        Form Input Biodata
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nim" id="nim">
                    </td>
                </tr>
                <tr>
                    <th>NAMA</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>Prodi</th>
                    <td>:</td>
                    <td>
                        <select name="prodi" id="prodi">
                            <option value="si">Sistem Informasi</option> 
                            <option value="rpl">Rekayasa Perangkat Lunak</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>