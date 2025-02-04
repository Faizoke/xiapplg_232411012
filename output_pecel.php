<!DOCTYPE html>
<html>
<head>
    <title>Bukti Pembayaran Pecel Lele FaizOk :3</title>
</head>
<body>
    <?php
    date_default_timezone_set("Asia/Jakarta");

    $nama_pembeli    = $_POST['nama_pembeli'];
    $alamat_pembeli  = $_POST['alamat_pembeli'];
    $paket           = $_POST['paket'];
    $tambahan        = isset($_POST['tambahan']) ? $_POST['tambahan'] : [];

    $daftar_paket = [
        1 => ["menu" => "Nasi, Ayam Goreng, Teh Botol", "harga" => 12000],
        2 => ["menu" => "Nasi, Lele Goreng, Es Teh Manis", "harga" => 10000],
        3 => ["menu" => "Nasi, Ayam Goreng, Lele Goreng, Teh Botol", "harga" => 20000]
    ];

    $harga_tambahan = [
        "nasi" => 2500,
        "kentang" => 3000,
        "telur" => 2000
    ];

    $harga_paket = $daftar_paket[$paket]["harga"];
    $menu_paket = $daftar_paket[$paket]["menu"];

    $biaya_tambahan = 0;
    $menu_tambahan = [];
    foreach ($tambahan as $item) {
        $biaya_tambahan += $harga_tambahan[$item];
        $menu_tambahan[] = ucfirst($item);
    }
    $menu_tambahan_str = implode(", ", $menu_tambahan);

    $subtotal = $harga_paket + $biaya_tambahan;
    $potongan = ($subtotal > 15000) ? $subtotal * 0.1 : 0;
    $total_bayar = $subtotal - $potongan;

    $tanggal = date("d M Y");
    $jam = date("H:i:s");

    echo "
        <pre>
        <h1>BUKTI PEMBAYARAN PECEL LELE FaizOk :3</h1>
        <hr width=20% align=left>
Tanggal Cetak       : $tanggal
Jam Cetak           : $jam         Nama Pembeli        : $nama_pembeli   
==========================================================================
Pilihan Paket       : $menu_paket
Menu Tambahan       : ".($menu_tambahan_str ?: "-")."
Harga Paket         : Rp".number_format($harga_paket, 0, ',', '.')."
Biaya Tambahan      : Rp".number_format($biaya_tambahan, 0, ',', '.')."
==========================================================================(+)
Subtotal            : Rp".number_format($subtotal, 0, ',', '.')."
Potongan            : Rp".number_format($potongan, 0, ',', '.')."
==========================================================================(-)
Total Bayar         : Rp".number_format($total_bayar, 0, ',', '.')."
<hr width=20% align=left>
        </pre>
    ";
    ?>
    <br>
    <a href="input_pecel.php">Input Kembali</a>
</body>
</html>