@extends('admin.layouts.app')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Mentors</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <a href="{{ url('dashboard/mentor/create') }}" class="btn btn-outline-primary">Create Mentor</a>
        </ol>
      </div>
    </div>
  </div>
</section>
<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="card">
    <div class="card-body p-0">
      <table class="table table-striped projects">
        <thead>
            <tr>
              <th>Mentor</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Total Course</th>
              <th class="text-center">Created Date</th>
              <th class="text-right">Action</th>
            </tr>
        </thead>
        <tbody>
          @if ($mentors->count())
          @foreach($mentors as $mentor)
          <tr>
            <td><a href="{{route('mentor.show', $mentor->id)}}">{{$mentor->name}}</a></td>
            <td>{{$mentor->phone}}</td>
            <td>{{$mentor->email}}</td>
            <td>{{$mentor->course->count()}}</td>
            <td class="text-center">{{ dateFormat($mentor->created_at) }}</td>
            <td class="text-right">
            <a type="button" class="delete" href="{{ route('mentor.destroy', $mentor->id) }}"><i class="fas fa-trash text-danger"></i></a>
            </td>
          </tr>
          @endforeach
          @else
          <tr>
            <td colspan="6">
              <h5 class="text-center text-danger">No Mentors Found.</h5>
            </td>
          </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
</section>
@endsection