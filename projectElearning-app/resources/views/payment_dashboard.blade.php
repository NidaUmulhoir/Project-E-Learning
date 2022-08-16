<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/payment_dashboard.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Payment</title>
</head>
<body>
    @include('header')

    <div class="space"></div>
    <div class="payment-content">
        <h2>Pembayaran untuk Paket Langganan</h2>
        <div class="amount">
            <div class="pay">
                <h3> Harga Langganan</h3>
                <hr>
                <h5>Hemat 0%</h5>
                <h5>1 Bulan (30 Hari)</h5>
                <hr>
                <div class="promo">
                    <h4>Kode Promo</h4>
                    <h5>Bayar Lebih Hemat dengan Promo</h5>
                    <div class="input-code">
                      <input type="text" class="form-control" id="formInputCode" placeholder="Input Code Promo">
                      <button type="submit" class="submit-btn">Terapkan</button>
                    </div>
                </div>
                <hr>
                <div class="tagihan"> 
                    <h4>Jumlah Tagihan</h4>
                    <h6>RP 250.000,00</h6>
                </div>
                <div class="bayar">
                    <button type="submit" class="pay-btn">Bayar</button>
                </div>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>