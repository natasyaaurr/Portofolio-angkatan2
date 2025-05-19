<?php
//array adalah tipe data yang dapat menyimpan lebih dari satu data
$nama = array("Natasyah", "Auralia", "Rahmadini");
$nama = ["Natasyah", "Auralia", "Rahmadini"];
echo $nama[2];
print_r($nama);
echo "<br>";
echo "<br>";
// $buah = array("apel", "jeruk", "mangga") ini adalah array indeks;
$buah = ["apel", "jeruk", "mangga"];
echo $buah[1];
echo "<br>";
print_r($buah);
echo "<br>";

foreach ($buah as $b) {
    echo "Nama nama buah " . $b . "<br>";
}
echo "<br>";
// gunanya untuk melakukan perulangan pada array

// array asosiatif adalah array yang memiliki kunci dan nilai
// array asosiatif : key menggunakan string
$kelas_web = [
    "nama" => "Natasyah Auralia Rahmadini",
    "umur" => 24,
    "jurusan" => "Teknik Informatika",
];
echo "<br>";
echo "Nama Siswa " . $kelas_web["nama"] . "<br>";
echo "<br>";
echo "Usia Siswa " . $kelas_web["umur"] . "<br>";
echo "<br>";
echo "Jurusan Siswa " . $kelas_web["jurusan"] . "<br>";
echo "<br>";

echo " Nama Siswa " . $kelas_web["nama"] . "<br>" . "Usia Siswa " . $kelas_web["umur"] . "<br>" . "Jurusan Siswa " . $kelas_web["jurusan"] . "<br>";
echo "<br>";
echo "<br>";
// array multidimensi adalah array yang memiliki lebih dari satu dimensi
// array multidimensi adalah array yang bisa menyimpan dengan tipe data yang berbeda
// array multidimensi adalah array yang bisa menyimpan lebih dari satu array
$siswa = [
    [
        "nama" => "Natasyah Auralia Rahmadini",
        "umur" => 24,
        "jurusan" => "Teknik Informatika",
    ],
    [
        "nama" => "Arciara Lutfana Aqsa Surya",
        "umur" => 24,
        "jurusan" => "Teknik Informatika",
    ],
    [
        "nama" => "Muhammad Albercio Surya",
        "umur" => 24,
        "jurusan" => "Teknik Informatika",
    ],
];

echo "Nama Siswa " . $siswa[0]["nama"] . "<br>" . "Usia Siswa " . $siswa[0]["umur"] . "<br>" . "Jurusan Siswa " . $siswa[0]["jurusan"] . "<br>";
echo "Nama Siswa " . $siswa[1]["nama"] . "<br>" . "Usia Siswa " . $siswa[1]["umur"] . "<br>" . "Jurusan Siswa " . $siswa[1]["jurusan"] . "<br>";
echo "Nama Siswa " . $siswa[2]["nama"] . "<br>" . "Usia Siswa " . $siswa[2]["umur"] . "<br>" . "Jurusan Siswa " . $siswa[2]["jurusan"] . "<br>";
echo "<br>";
echo "<br>";
print_r($siswa);
[0 => "nama"];
echo "<br>";
echo "<br>";
echo $siswa[1]["nama"];
echo "<br>";
echo "<br>";
foreach ($siswa as $s) {
    echo "Nama Siswa : " . $s["nama"] . "<br>" . "Usia Siswa : " . $s["umur"] . "<br>" . "Jurusan Siswa : " . $s["jurusan"] . "<br>";
}
;

?>