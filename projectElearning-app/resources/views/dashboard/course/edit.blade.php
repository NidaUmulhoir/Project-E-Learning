@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Course</h1>
  </div>

<div class="col-lg-8">
  <form method="POST" action="/admin/course/{{$course->id}}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="courseName" class="form-label">Course Name</label>
      <input type="text" class="form-control @error('courseName') is-invalid @enderror" id="courseName" name="courseName" value="{{ old('courseName', $course->courseName) }}">
      @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Image</label>
      <input type="hidden" name="oldImage" value="{{ $course->image }}">
      @if($course->image)
        <img src="{{asset('storage/' . $course->image)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
      @else
        <img class="img-preview img-fluid mb-3 col-sm-5">
      @endif
      <img class="img-preview img-fluid mb-3 col-sm-5">
      <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
      @error('image') 
        <div class="invalid-feedback">
          {{ $message }}
        </div>
     @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        @error('description')
            <p class="text-danger"> {{ $message }}</p>
        </div>
        @enderror
        <input id="description" type="hidden" name="description" value="{{ old('description',  $course->description) }}">
        <trix-editor input="description"></trix-editor>
    </div>
    
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