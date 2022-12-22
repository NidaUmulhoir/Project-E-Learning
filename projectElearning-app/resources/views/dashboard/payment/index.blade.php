@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Payment</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Username</th>
          <th scope="col">Packet</th>
          <th scope="col">Created at</th>
          <th scope="col">Approve</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($payments as $payment)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $payment->user->name }}</td>
          <td>{{ $payment->packet->packet }}</td>
          <td>{{ $payment->created_at }}</td>
          <td>
            <form action="/admin/payment/{{$payment->id}}" method="post" class="d-inline">
              @method('put')
              @csrf
                @if ($payment->approve == 'waiting')
                <button class="badge bg-warning border-0" name="approve">
                  Waiting
                @else
                <button class="badge bg-success border-0" name="approve">
                  Approved
                @endif
                </span></button>
            </form>            
          </td>
          <td>
            <a href="/admin/payment/{{$payment->id}}" class="badge bg-warning"><span data-feather="eye"></span></a>
            <form action="/admin/payment/{{$payment->id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure want to delete this module?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection