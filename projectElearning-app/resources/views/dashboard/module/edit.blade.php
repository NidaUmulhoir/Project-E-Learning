@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Course</h1>
  </div>

<div class="col-lg-8">
  <form method="POST" action="/admin/course-detail/module/{{$module->id}}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="idCourse" class="form-label">ID Course</label>
        <input type="text" class="form-control @error('idCourse') is-invalid @enderror" id="idCourse" name="idCourse" value="{{ old('idCourse', $module->idCourse) }}">
        @error('idCourse')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
    <div class="mb-3">
      <label for="moduleName" class="form-label">Module Name</label>
      <input type="text" class="form-control @error('moduleName') is-invalid @enderror" id="moduleName" name="moduleName" value="{{ old('moduleName', $module->moduleName) }}">
      @error('moduleName')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{ old('type', $module->type) }}">
        @error('type')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
    <div class="mb-3">
        <label for="materi" class="form-label">Materi</label>
        @error('materi')
            <p class="text-danger"> {{ $message }}</p>
        </div>
        @enderror
        <input id="materi" type="hidden" name="materi" value="{{ old('materi', $module->materi) }}">
        <trix-editor input="materi"></trix-editor>
    </div>
    <div class="mb-3">
        <label for="checkbox" class="form-label">Subsribe</label>
        @error('checkbox')
            <p class="text-danger"> {{ $message }}</p>
        </div>
        @enderror
        <input type="checkbox" name="isSubscribe">
        <input id="checkbox" type="hidden" name="checkbox" value="{{ old('checkbox') }}">
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