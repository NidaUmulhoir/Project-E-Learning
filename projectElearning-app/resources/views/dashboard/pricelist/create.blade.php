@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Pricelist</h1>
  </div>

<div class="col-lg-8">
  <form method="post" action="/admin/pricelist" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="packet" class="form-label">Packet</label>
      <input type="text" class="form-control @error('packet') is-invalid @enderror" id="packet" name="packet" value="{{ old('packet') }}">
      @error('packet')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
        @error('price')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="duration" class="form-label">Duration</label>
        <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ old('duration') }}">
        @error('duration')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>
@endsection