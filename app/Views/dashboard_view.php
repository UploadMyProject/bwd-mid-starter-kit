<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard - <?= $nama_startup ?></title>
</head>
<body>
    <h1>Dashboard <?= $nama_startup ?></h1>
    <a href="/auth/logout">Logout</a>

    <h3>Katalog Produk (Data dari Model)</h3>
    <table border="1">
        <tr><th>Nama</th><th>Harga</th><th>Stok</th><th>Aksi</th></tr>
        
        <?php foreach($products as $p): ?>
        <tr>
            <td><?= $p['name'] ?></td>
            <td><?= $p['price'] ?></td>
            <td class="stok-barang"><?= $p['stock'] ?></td>
            <td><button class="btn-beli">Beli</button></td>
        </tr>
        <?php endforeach; ?>
    </table>

    <hr>
    <h3>Tugas Interaktivitas DOM</h3>
    <script>
        // TODO: TUGAS MAHASISWA!
        // Gunakan JavaScript Vanilla untuk membuat fitur interaktif.
        // Contoh: Jika tombol "Beli" diklik, kurangi angka pada kolom "Stok" di baris tersebut.
        // Tulis JS Anda di bawah ini:

    </script>
</body>
</html>