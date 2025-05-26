<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Invoice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h1, h2 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        label {
            display: inline-block;
            width: 150px;
            margin-bottom: 10px;
        }

        input, select {
            width: 250px;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <form onsubmit="tambahInvoice(); return false;">
        <label for="no_invoice">Nomor Invoice:</label>
        <input type="text" id="no_invoice" name="no_invoice"><br><br>

        <label for="tanggal">Tanggal:</label>
        <input type="date" id="tanggal" name="tanggal"><br><br>

        <label for="status">Status Pembayaran:</label>
        <select id="status" name="status">
            <option value="Lunas">Lunas</option>
            <option value="Belum Lunas">Belum Lunas</option>
        </select><br><br>

        <label for="nama_penerima">Nama Penerima:</label>
        <input type="text" id="nama_penerima" name="nama_penerima"><br><br>

        <label for="total_pembayaran">Total Pembayaran:</label>
        <input type="number" id="total_pembayaran" name="total_pembayaran"><br><br>

        <button type="submit">Tambah Invoice</button>
    </form>

    <div>
        <ul>
            @foreach ($data as $invoice)
                <li>
                    <a href="#">
                        {{ $invoice }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <h2>Daftar Invoice</h2>
    <table>
        <thead>
            <tr>
                <th>Nomor Invoice</th>
                <th>Tanggal</th>
                <th>Status Pembayaran</th>
                <th>Nama Penerima</th>
                <th>Total Pembayaran</th>
            </tr>
        </thead>
        <tbody id="invoiceTable">
            <tr>
                <td>INV-001</td>
                <td>2023-05-01</td>
                <td>Lunas</td>
                <td>John Doe</td>
                <td>500,000</td>
            </tr>
            <tr>
                <td>INV-002</td>
                <td>2023-05-05</td>
                <td>Belum Lunas</td>
                <td>Jane Smith</td>
                <td>300,000</td>
            </tr>
            <tr>
                <td>INV-003</td>
                <td>2023-05-10</td>
                <td>Lunas</td>
                <td>Michael Johnson</td>
                <td>700,000</td>
            </tr>
        </tbody>
    </table>
    <script>
    function tambahInvoice() {
        // Ambil data dari form
        let noInvoice = document.getElementById('no_invoice').value;
        let tanggal = document.getElementById('tanggal').value;
        let status = document.getElementById('status').value;
        let nama = document.getElementById('nama_penerima').value;
        let total = parseInt(document.getElementById('total_pembayaran').value);

        // Validasi sederhana
        if (!noInvoice || !tanggal || !status || !nama || !total) {
            alert("Semua kolom wajib diisi!");
            return;
        }

        var table = document.getElementById("invoiceTable");

        // Isi dengan data
        table.innerHTML += `
            <tr>
            <td>${noInvoice}</td>
            <td>${tanggal}</td>
            <td>${status}</td>
            <td>${nama}</td>
            <td>${total.toLocaleString('id-ID')}</td>
            </tr>
        `;

        // // Tambahkan ke tabel
        // document.getElementById('invoiceTable').appendChild(row);

        // Reset form
        document.querySelector('form').reset();
    }
    </script>
</body>
</html>
