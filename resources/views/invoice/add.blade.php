<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Form</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f9;
            padding-top: 20px;
        }
        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container form-container">
    <h2>Invoice Input Form</h2>
    <form action="#">
        <div class="form-group">
            <label for="no_invoice">Nomor Invoice:</label>
            <input type="text" class="form-control" id="no_invoice" name="no_invoice" required>
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
        </div>

        <div class="form-group">
            <label for="status">Status Pembayaran:</label>
            <select class="form-control" id="status" name="status" required>
                <option value="Lunas">Lunas</option>
                <option value="Belum Lunas">Belum Lunas</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nama_penerima">Nama Penerima:</label>
            <input type="text" class="form-control" id="nama_penerima" name="nama_penerima" required>
        </div>

        <div class="form-group">
            <label for="total_pembayaran">Total Pembayaran:</label>
            <input type="number" class="form-control" id="total_pembayaran" name="total_pembayaran" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Invoice</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
