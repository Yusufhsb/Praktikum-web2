<!DOCTYPE html>
<html>
<head>
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Belanja Online</h1>
        <form method='POST' action='hasil.php'>
            <div class="form-group">
                <label for="customer_name">Nama Customer</label>
                <input type="text" class="form-control" id="customer_name" name="customer_name" required>
            </div>
            <div class="form-group">
                <label for="product">Pilih Produk</label>
                <select class="form-control" id="product" name="product" required>
                    <option value="TV">TV : 4.200.000</option>
                    <option value="KULKAS">Kulkas : 3.100.000</option>
                    <option value="MESIN_CUCI">Mesin Cuci : 3.800.000</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Jumlah</label>
                <input type="number" class="form-control" id="quantity" name="quantity" min="1" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>
</html>
