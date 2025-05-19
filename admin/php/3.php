<?php
$siswa = [
    [
        "nama" => "Natasyah Auralia Rahmadini",
        "umur" => 24,
        "jurusan" => "Teknik Informatika",
        "Status" => "1",
    ],
    [
        "nama" => "Arciara Lutfana Aqsa Surya",
        "umur" => 24,
        "jurusan" => "Teknik Informatika",
        "Status" => "1",
    ],
    [
        "nama" => "Muhammad Albercio Surya",
        "umur" => 24,
        "jurusan" => "Teknik Informatika",
        "Status" => "1",
    ],
];

function ubahStatus($status)
{
    switch ($status) {
        case '1':
            return "Aktif";
            break;

        default:
            "Tidak Aktif";
            break;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>

<body>
    <h1>Data Siswa</h1>
    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Jurusan</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($siswa as $key => $s) { ?>
                <tr>
                    <td><?= $s["nama"]; ?></td>
                    <td><?= $s["umur"]; ?></td>
                    <td><?= $s["jurusan"]; ?></td>
                    <td>
                        <?php
                        switch ($s['Status']) {
                            case '1':
                                echo "Aktif";
                                break;

                            default:
                                return "Tidak Aktif";
                                break;
                        }

                        // echo ubahStatus($s['Status']);
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>