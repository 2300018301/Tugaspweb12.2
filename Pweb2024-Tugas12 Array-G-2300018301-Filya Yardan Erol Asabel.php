<!DOCTYPE html>
<html>
<head>
    <title>Input Array Nilai</title>
</head>
<body>

<h2>Masukkan Jumlah Mahasiswa</h2>
<form method="post" action="">
    Jumlah Mahasiswa: <input type="number" name="jumlah" required>
    <input type="submit" name="submit_jumlah" value="Submit">
</form>

<?php
if (isset($_POST['submit_jumlah'])) {
    $jumlah = $_POST['jumlah'];
    echo "<h2>Masukkan Nilai</h2>";
    echo '<form method="post" action="">';
    echo '<input type="hidden" name="jumlah" value="' . $jumlah . '">';
    for ($i = 1; $i <= $jumlah; $i++) {
        echo "$i Nama: <input type=\"text\" name=\"nama$i\" required> ";
        echo " Nilai: <input type=\"number\" name=\"nilai$i\" required><br><br>";
    }
    echo '<input type="submit" name="submit_nilai" value="Urutkan Nilai">';
    echo '</form>';
}

if (isset($_POST['submit_nilai'])) {
    $jumlah = $_POST['jumlah'];
    $arrNilai = array();
    for ($i = 1; $i <= $jumlah; $i++) {
        $nama = $_POST['nama' . $i];
        $nilai = $_POST['nilai' . $i];
        $arrNilai[$nama] = $nilai;
    }

    echo "<b><br>Array sebelum diurutkan</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";

    asort($arrNilai);
    reset($arrNilai);
    echo "<b>Array setelah diurutkan dari terkecil ke terbesar</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";

    arsort($arrNilai); 
    reset($arrNilai);
    echo "<b>Array setelah diurutkan dari terbesar ke terkecil</b>";
    echo "<pre>";
    print_r($arrNilai);
    echo "</pre>";
}
?>

</body>
</html>
