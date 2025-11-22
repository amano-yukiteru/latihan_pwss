<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Produk</title>
</head>

<body>
    <h3>Create Produk</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori" id="">
                        <option value="makanan">Makanan</option>
                        <option value="minuman">Minuman</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td>
                    <textarea name="deskripsi" id=""></textarea>
                </td>
            </tr>
            <tr>
                <td>Jumlah</td>
                <td>
                    <input type="number" name="jumlah" id="">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>
                    <input type="number" name="harga" id="">
                </td>
            </tr>
            <tr>
                <td>Upload Gambar</td>
                <td>
                    <input type="file" name="gambar" id="" accept="image/*">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="SIMPAN" name="simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>