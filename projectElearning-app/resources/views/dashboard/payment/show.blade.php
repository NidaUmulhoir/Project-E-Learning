@extends('dashboard.layouts.main')

@section('container')
<br><br>
<a href="/admin/payment">
    <button type="admin" class="btn btn-primary">Back</button>
</a>
<br>
<h3>Bukti Pembayaran</h3>
<table>
    <tr>
        <td>Name    :</td>
        <td></td>
        <td>{{ $payment->user->name }}</td>
    </tr>

    <tr>
        <td>Packet  :</td>
        <td></td>
        <td>{{ $payment->packet->packet }}</td>
    </tr>
</table>
    @if ($payment->image)
        <img src="{{ asset('storage/' . $payment->image) }}" alt="">
    @endif
@endsection