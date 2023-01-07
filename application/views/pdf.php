<!DOCTYPE html>
<html lang="en"><head>
    <title></title>
    <style>
        th, td {
            border: 1px solid black;  
        }
    </style>
</head><body>
    <h3>Daftar Alumni SMKSA</h3>
    <hr>
    <ul style="list-style: none">
        <?php if ($jurusan) { ?>
            <li>Jurusan : <?= $jurusan ?></li>
        <?php }
        if ($status) { ?>
            <li>Status : <?= $status ?></li>
        <?php } ?>
    </ul>
    <table>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <?php if (!$jurusan) { ?>
                <th scope="col">Jurusan</th>
            <?php }
            if (!$status) { ?>
                <th scope="col">Kegiatan Setelah Lulus</th>
            <?php } ?>
            <th scope="col">Tahun</th>
            <th scope="col">No. Telp</th>
            <th scope="col">Sosial Media</th>
            <th scope="col">Nama Industry</th>
            <th scope="col">Rating SMKSA</th>
            <th scope="col">Saran SMKSA</th>
            <th scope="col">Tanggal Daftar</th>
        </tr>
        <?php
        $i = 1;
        foreach ($admin as $u) :
        ?>
            <tr>
                <th><?= $i++; ?></th>
                <td><?= $u['nama_alumni'] ?></td>
                <td><?= $u['jenis_kelamin'] ?></td>
                <td><?= $u['alamat'] ?></td>
                <?php if (!$jurusan) { ?>
                    <td><?= $u['jurusan'] ?></td>
                <?php }
                if (!$status) { ?>
                    <td><?= $u['keg_set_lulus'] ?></td>
                <?php } ?>
                <td><?= $u['tahun_lulus'] ?></td>
                <td><?= $u['no_telp'] ?></td>
                <td><?= $u['sosmed'] ?></td>
                <td><?= $u['nama_industry'] ?></td>
                <td><?= $u['rating_smksa'] ?></td>
                <td><?= $u['saran_smksa'] ?></td>
                <td><?= $u['tanggal_daftar'] ?></td>
            </tr>
        <?php
        endforeach;
        ?>
    </table>
</body></html>