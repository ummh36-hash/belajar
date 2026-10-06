<?php
$hasil = "";

function konversiKeIDR ($nominal, $mataUang) {
    if ($nominal <= 0) {
        return "Nominal harus lebih besar dari 0";
    }

switch 
($mataUang) {
    case "USD":
        $hasil = $nominal * 17884;
        break;
    case "SGD":
        $hasil = $nominal * 13500;
        break;
    case "JPY":
        $hasil = $nominal * 115;
        break;
    default:
        return "Mata uang tidak dikenali";
        
}

return "Rp" . $hasil;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nominal = $_POST["nominal"];
    $mataUang = $_POST["operation"];

    $hasil = konversiKeIDR($nominal, $mataUang);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kalkulator sederhana</title>
</head>
<body>
    <h1>kalkulator sederhana</h1>
    <form method="post">
        <input type="number" name="nominal" placeholder="Masukkan nominal" required>
        <select name="operation" required>
            <option value="USD">USD</option>
            <option value="SGD">SGD</option>
            <option value="JPY">JPY</option>
        </select>
        <button type="submit">Hitung</button>
    </form>
    <h3>hasil : <?php echo $hasil; ?> </h3>
</body>
</html>