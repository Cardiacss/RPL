<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student SPP Payment Information</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { width: 90%; margin: auto; overflow: hidden; }
        .header, .content-box { background: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); margin: 10px 0; }
        .header { display: flex; align-items: center; justify-content: space-between; }
        .header img { border-radius: 5px; }
        .navbar { display: flex; justify-content: space-around; margin: 20px 0; background: #333; color: #fff; padding: 10px 0; border-radius: 5px; }
        .navbar a { color: #fff; text-decoration: none; padding: 10px; }
        .section-title { background: #4CAF50; color: white; padding: 10px; border-radius: 5px; margin-bottom: 10px; }
        .info { padding: 10px; }
        .table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        .table, .table th, .table td { border: 1px solid #ddd; padding: 8px; }
        .table th { background-color: #4CAF50; color: white; }
        .table tr:nth-child(even) { background-color: #f2f2f2; }
        .progress-bar { width: 100%; background-color: #e0e0e0; border-radius: 10px; overflow: hidden; margin-top: 5px; }
        .progress { background-color: #4CAF50; height: 20px; text-align: center; color: white; width: 50%; }
        .download-button { margin-top: 10px; padding: 10px; background: #4CAF50; color: #fff; text-decoration: none; border-radius: 5px; display: inline-block; }
        .download-button:hover { background: #45a049; }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navigation Bar -->
        <div class="navbar">
            <a href="#">Home</a>
            <a href="#">Kehadiran</a>
            <a href="#">Pengaduan</a>
            <a href="#">Pembayaran</a>
            <a href="#">Bimbingan</a>
        </div>

        <!-- Header -->
        <div class="header">
            <div>
                <h1>Leon S. Kennedy</h1>
                <p>Program Studi: Sistem Informasi</p>
                <p>NIM: 72230123</p>
            </div>
            <img src="path/to/image.jpg" alt="Student Photo" width="100" height="120">
        </div>

        <!-- SPP Payment Information Section -->
        <div class="content-box">
            <div class="section-title">Data Pembayaran SPP</div>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Semester</th>
                    <th>Tagihan</th>
                    <th>Total Bayar</th>
                    <th>Tanggal</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Gasal 2023/2024</td>
                    <td>8,530,000</td>
                    <td>8,530,000</td>
                    <td>01-02-2023<br>10:28:26 BPD</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Genap 2023/2024</td>
                    <td>9,420,000</td>
                    <td>9,420,000</td>
                    <td>05-09-2023<br>10:28:26 BRI</td>
                </tr>
            </table>
            <a href="path/to/invoice.pdf" class="download-button">Download Invoice</a>
        </div>

        <div class="content-box">
            <div class="section-title">Cara Pembayaran SPP</div>
            <div class="info">
                <p>Pembayaran SPP dapat dilakukan melalui beberapa bank berikut:</p>

                <p><strong>BANK BNI:</strong><br>
                    • Student Payment Center (SPC) BNI (ATM, Teller, Mobile Banking) dengan menyebutkan NIM.<br>
                    • Virtual Account: <strong>9887891272220569</strong>
                </p>

                <p><strong>BANK BRI:</strong><br>
                    • Melalui Teller dengan menyebutkan NIM.<br>
                    • Virtual Account: <strong>135150272220569</strong>
                </p>

                <p><strong>BANK BPD-DIY:</strong><br>
                    • Melalui ATM, Teller, dan Mobile Banking di seluruh kantor layanan dan ATM BANK BPD DIY dengan menyebutkan NIM.
                </p>

                <p><strong>BANK MANDIRI:</strong><br>
                    • Virtual Account: <strong>8889000272220569</strong>
                </p>
            </div>
        </div>
