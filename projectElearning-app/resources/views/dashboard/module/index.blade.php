@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Courses</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-8">
  <a href="/admin/course-detail/module/create" class="btn btn-primary mb-3">Create New Module</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Module Name</th>
          <th scope="col">Type</th>
          <th scope="col">Materi</th>
          <th scope="col">Subscribe</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($modules as $module)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $module->moduleName }}</td>
          <td>{{ $module->type }}</td>
          <td>{{ $module->materi }}</td>
          <td>{{ $module->isSubscribe }}</td>
          <td>
            <a href="/admin/course-detail/module/{{$module->id}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/admin/course-detail/module/{{$module->id}}" method="post" class="d-inline">
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