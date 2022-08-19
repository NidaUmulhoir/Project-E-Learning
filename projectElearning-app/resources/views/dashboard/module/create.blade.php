@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Course</h1>
  </div>

<div class="col-lg-8">
  <form method="post" action="/admin/course-detail/module" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="idCourse" class="form-label">ID Course</label>
        <input readonly type="text" class="form-control @error('idCourse') is-invalid @enderror" id="idCourse" name="idCourse" value="{{ session('data') }}">
        @error('idCourse')
          <div class="invalid-feedback">
              {{ $message }}
          </div>
        @enderror
      </div>
    <div class="mb-3">
      <label for="moduleName" class="form-label">Module Name</label>
      <input type="text" class="form-control @error('moduleName') is-invalid @enderror" id="moduleName" name="moduleName" value="{{ old('moduleName') }}">
      @error('moduleName')
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
        <input id="materi" type="hidden" name="materi" value="{{ old('materi') }}">
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

    
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>
@endsection