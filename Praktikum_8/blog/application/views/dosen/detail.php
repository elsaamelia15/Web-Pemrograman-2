<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <h3>Dosen</h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>gender</th>
                <th>tmp_lahir</th>
                <th>tgl_lahir</th>
                <th>nidn</th>
                <th>Pendidikan</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $nomor = 1;
        foreach ($list_dsn as $dsn) {
        ?>
        <tr>
            <td><?php echo $nomor ?></td>
            <td><?php echo $dosen -> nama ?></td>
            <td><?php echo $dosen -> gender ?></td>
            <td><?php echo $dosen -> tmp_lahir ?></td>
            <td><?php echo $dosen -> tgl_lahir ?></td>
            <td><?php echo $dosen -> nidn ?></td>
            <td><?php echo $dosen -> pendidikan ?></td>
            <td>
                <a href="">Detail</a>
        </td>
        </tr>
        <?php
        $nomor++;
        }
        ?>
        </tbody>
    </table>
</body>
</html>          