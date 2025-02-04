<!DOCTYPE html>
<html>
<head>
    <title>Rumah Makan Pecel Lele FaizOk</title>
    <style>
        table {
            width: 40%;
            border-collapse: collapse;
            font-size: 14px:
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Rumah Makan Pecel Lele FaizOk :3</h2>
    <form action="output_pecel.php" method="POST">
        <table>
            <tr>
                <th>Label</th>
                <th>Input</th>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td><input type="text" name="nama_pembeli" required></td>
            </tr>
            <tr>
                <td>Alamat Pembeli</td>
                <td><input type="text" name="alamat_pembeli" required></td>
            </tr>
            <tr>
                <td>Paket</td>
                <td>
                    <select name="paket">
                        <option value="1">Paket 1</option>
                        <option value="2">Paket 2</option>
                        <option value="3">Paket 3</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Menu Tambahan</td>
                <td>
                    <input type="checkbox" name="tambahan[]" value="nasi"> Nasi <br>
                    <input type="checkbox" name="tambahan[]" value="kentang"> Kentang Goreng <br>
                    <input type="checkbox" name="tambahan[]" value="telur"> Telur Rebus
                </td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <input type="submit" value="PROSES">
                    <input type="reset" value="BATAL">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>