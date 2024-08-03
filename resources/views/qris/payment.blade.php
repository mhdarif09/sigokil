<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRIS Payment</title>
    <!-- Tambahkan CSS atau library lainnya jika diperlukan -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .qr-code {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>QRIS Payment</h1>
        <p>Scan the QR code below to complete your payment.</p>
        <div class="qr-code">
            <!-- Ganti dengan gambar QR code sebenarnya -->
            <img src="path/to/qr-code.png" alt="QR Code" width="200">
        </div>
        <p>Total Amount: Rp. {{ number_format($order->total, 0, ',', '.') }}</p>
    </div>
</body>
</html>
