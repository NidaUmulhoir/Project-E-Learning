
@if ($payment->image)
    <img src="{{ asset('storage/' . $payment->image) }}" alt="">
@endif