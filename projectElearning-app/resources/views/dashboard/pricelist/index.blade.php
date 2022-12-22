@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Pricelist</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-10">
  <a href="/admin/pricelist/create" class="btn btn-primary mb-3">Create New Pricelist</a>
    <table class="table table-striped table-lg">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Packet</th>
          <th scope="col">Price</th>
          <th scope="col">Duration</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pricelists as $pricelist)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pricelist->packet }}</td>
          <td>{{ $pricelist->price }}</td>
          <td>{{ $pricelist->duration }}</td>
          <td>
            <a href="/admin/pricelist/{{$pricelist->id}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/admin/pricelist/{{$pricelist->id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection