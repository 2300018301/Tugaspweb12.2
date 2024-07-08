<!DOCTYPE html>
<html>
<head>
    <title>Cetak Bilangan Ganjil atau Genap</title>
</head>
<body>

<h2>Pilih Bilangan dan Rentang</h2>
<form method="post" action="">
    Pilih Jenis Bilangan: 
    <select name="jenis" required>
        <option value="ganjil">Ganjil</option>
        <option value="genap">Genap</option>
    </select><br><br>
    Mulai dari: <input type="number" name="awal" required><br><br>
    Sampai dengan: <input type="number" name="akhir" required><br><br>
    <input type="submit" name="submit" value="Cetak">
</form>

<?php
function cetak_ganjil_genap($awal, $akhir, $jenis) {
    $jumlah = 0;
    $output = '';
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($jenis == 'ganjil' && $i % 2 == 1) {
            $output .= "$i, ";
            $jumlah++;
        } elseif ($jenis == 'genap' && $i % 2 == 0) {
            $output .= "$i, ";
            $jumlah++;
        }
    }
    $output = rtrim($output, ', ');
    return [$output, $jumlah];
}

if (isset($_POST['submit'])) {
    $jenis = $_POST['jenis'];
    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];

    list($output, $jumlah) = cetak_ganjil_genap($awal, $akhir, $jenis);

    echo "<br><b>Bilangan $jenis dari $awal sampai $akhir adalah: </b><br>";
    echo $output . "<br>";
    echo "<b>Jumlah bilangan $jenis: $jumlah</b>";
}
?>

</body>
</html>
