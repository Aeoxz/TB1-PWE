<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/styles.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Dashboard Penjualan</h2>
        <ul>
            <li><a href="<?php echo e(url('home')); ?>">Home</a></li>
            <li><a href="<?php echo e(url('produk')); ?>">Produk</a></li>
            <li><a href="#">Penjualan</a></li>
            <li><a href="#">Laporan</a></li>
            <li><a href="#">Pengaturan</a></li>
        </ul>
    </div>
<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <header style="display: flex; justify-content: space-between;">
        <div>
            <h1>Daftar Produk</h1>
            <p>Temukan produk terbaik untuk kebutuhan Anda</p>
        </div>
        <div>
            <button class="card-button">Add Product</button>
        </div>
    </header>
<!-- Product Grid -->
<div>
    <div class="container">
        <h1>Create Produk</h1>
        <!-- Form to create a new produk -->
        <form action="<?php echo e(url('/produk/add')); ?>" method="POST" enctype="multipart/form-data"         >
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="number" name="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="jumlah_produk">Jumlah Produk</label>
                <input type="text" name="jumlah_produk" class="form-control" required>
            </div>

            <div class="form-group">
                 <label for="image">Gambar</label>
                 <input type="file" name="image" class="image" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\Users\Muhammad Alfarisi\OneDrive\Documents\Smester 5\Pemrograman Web Enterprise\TB1\Web Product\Product\resources\views/addproduk.blade.php ENDPATH**/ ?>