<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Academic Information</title>
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
        .progress-bar { width: 100%; background-color: #e0e0e0; border-radius: 10px; overflow: hidden; margin-top: 5px; }
        .progress { background-color: #4CAF50; height: 20px; text-align: center; color: white; width: 50%; }
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

        <!-- Academic Information Section -->
        <div class="content-box">
            <div class="section-title">Informasi Akademik</div>
            <div class="info">
                <p>IPK: 3.00</p>
                <p>Total SKS: 28</p>
                <p>Total Angka Kualitas: 130.2</p>
                <p>Asal: Apa aja Rek</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 75%;">3.00</div>
                </div>
            </div>
        </div>

        <!-- IP Development Section -->
        <div class="content-box">
            <div class="section-title">Perkembangan IP</div>
            <div class="info">
                <p>2023-1: <span class="progress-bar"><span class="progress" style="width: 75%;">3.00</span></span></p>
                <p>2024-2: <span class="progress-bar"><span class="progress" style="width: 65%;">2.60</span></span></p>
            </div>
        </div>

        <!-- Officials Section -->
        <div class="content-box">
            <div class="section-title">Pejabat</div>
            <div class="info">
                <p>Rektor: Dr.-Ing. WiyatiningSih, S.T., M.T.</p>
                <p>Dekan: Restyandito, S.Kom, MSIS., Ph.D</p>
            </div>
        </div>
    </div>
</body>
</html>
