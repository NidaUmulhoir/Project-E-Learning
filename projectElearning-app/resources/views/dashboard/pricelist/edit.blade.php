@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Pricelist</h1>
  </div>

<div class="col-lg-8">
  <form method="POST" action="/admin/pricelist/{{$pricelist->id}}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="packet" class="form-label">Packet</label>
      <input type="text" class="form-control @error('packet') is-invalid @enderror" id="packet" name="packet" value="{{ old('packet', $pricelist->packet) }}">
      @error('packet')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $pricelist->price) }}">
        @error('price')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="duration" class="form-label">Duration</label>
        <div class="input-group">
          <input type="text" class="form-control" id="validationCustomUsername" id="duration" name="duration" value="{{ old('duration', $pricelist->duration) }}" placeholder="" aria-describedby="inputGroupPrepend" required>
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupPrepend">Days</span>
          </div>
        </div>
      </div>
{{-- 
      <div class="mb-3">
        <label for="duration" class="form-label">Duration</label>
        <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ old('duration', $pricelist->duration) }}">
        @error('duration')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div> --}}
    
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
<script>
  function previewImage(){
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0]);

    ofReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result;
    }

  }
</script>
@endsection