<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/payment_dashboard.css">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}


    <title>Payment</title>
</head>
<body>
    @include('header')
    <div class="space"></div>
    <div class="payment-content">
        @if(session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif
        <h2>Pembayaran untuk Paket Langganan</h2>
        <div class="amount">
            <div class="pay">
                <h3> Harga Langganan</h3>
                <hr>
                <h5>Paket</h5>
                <h5>{{$price->packet}}</h5>
                <hr>
                <form method="post" action="/payment/{{ $price->id }}" enctype="multipart/form-data">
                    @csrf
                <div class="promo">
                    <h4>BNI : 07289023 a.n Balqis Sayyidahtul Atiqah</h4>
                    <h1>Masukkan bukti pembayaran</h1>
                    <div class="input-code">
                            <div class="mb-3">
                              {{-- <label for="image" class="form-label">Masukkan bukti pembayaran</label> --}}
                              <img class="img-preview img-fluid mb-3 col-sm-5">
                              <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
                              @error('image') 
                                <div class="invalid-feedback">
                                  {{ $message }}
                                </div>
                             @enderror
                          
                    </div>
                </div>
                <hr>
                <div class="tagihan">
                    <h4>Jumlah Tagihan</h4>
                    <h6>{{$price->price}}</h6>
                </div>
                <div class="bayar">
                    <button type="submit" class="pay-btn">Bayar</button>
                </div>
            </form>
            </div>
        </div>
    </div>
    @include('footer')
</body>
</html>