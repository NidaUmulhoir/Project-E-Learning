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

<div class="table-responsive col-lg-10">
  <a href="/admin/course/create" class="btn btn-primary mb-3">Create New Course</a>
    <table class="table table-striped table-lg">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Course Name</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($courses as $course)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $course->courseName }}</td>
          @php $content = strip_tags($course->description); @endphp
          <td>{{ $content }}</td>
          <td style=" width: 120px">
            <a href="/admin/course/{{$course->id}}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/admin/course/{{$course->id}}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
            </form>
            <a href="{{route('module.index')}}?courseId={{ $course->id}}" class="badge bg-primary"><span data-feather="file-plus"></span></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection