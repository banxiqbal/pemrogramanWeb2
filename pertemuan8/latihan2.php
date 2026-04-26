<html>
<head>
    <title>Contoh Penggunaan UDF</title>
</head>
<body>

<!-- Form Input -->
<form method="POST">
    Masukkan Bilangan Pertama : <br>
    <input type="text" name="A" size=10> <br>
    Masukkan Bilangan Kedua : <br>
    <input type="text" name="B" size=10> <br>
    <input type="submit" value="hitung">
</form>

<?php
// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["A"];
    $b = $_POST["B"];
    
    // Function Penjumlahan
    function jumlah($A, $B) {
        $jumlahbil = $A + $B;
        return $jumlahbil;
    }
    
    // Function Pengurangan
    function kurang($A, $B) {
        $kurangbil = $A - $B;
        return $kurangbil;
    }
    
    // Function Perkalian
    function kali($A, $B) {
        $kalibil = $A * $B;
        return $kalibil;
    }
    
    // Function Pembagian
    function bagi($A, $B) {
        if ($B == 0) {
            return "Tidak bisa dibagi 0";
        }
        $bagibil = $A / $B;
        return $bagibil;
    }
    
    echo "<br>";
    echo "Bilangan Pertama : " . $a;
    echo "<br>";
    echo "Bilangan Kedua : " . $b;
    echo "<br><br>";
    
    // Penjumlahan
    echo "Hasil Penjumlahan 2 buah bilangan <br>";
    $jumlahbil = jumlah($a, $b);
    printf("Penjumlahan antara : %d + %d = %d", $a, $b, $jumlahbil);
    echo "<br><br>";
    
    // Pengurangan
    echo "Hasil Pengurangan 2 buah bilangan <br>";
    $kurangbil = kurang($a, $b);
    printf("Pengurangan antara : %d - %d = %d", $a, $b, $kurangbil);
    echo "<br><br>";
    
    // Perkalian
    echo "Hasil Perkalian 2 buah bilangan <br>";
    $kalibil = kali($a, $b);
    printf("Perkalian antara : %d * %d = %d", $a, $b, $kalibil);
    echo "<br><br>";
    
    // Pembagian
    echo "Hasil Pembagian 2 buah bilangan <br>";
    $bagibil = bagi($a, $b);
    printf("Pembagian antara : %d / %d = %d", $a, $b, $bagibil);
    echo "<br><br>";
}
?>

</body>
</html>