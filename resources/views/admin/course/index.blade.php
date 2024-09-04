@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Courses</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <a href="{{ url('dashboard/course/create') }}" class="btn btn-outline-primary">Create Course</a>
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
                    <th>ID</th>
                    <th>Course</th>
                    <th>Category</th>
                    <th>Mentor</th>
                    <th>Students</th>
                    <th>Course Fee</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Created Date</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($courses->count())
                        @foreach ($courses as $course)
                            <tr>
                                <td>{{ $course->course_code }}</td>
                                <td><a href="{{ route('course.show', $course->id) }}">{{ $course->name }}</a></td>
                                <td>{{ $course->category->name }}</td>
                                <td>{{ $course->mentor->name }}</td>
                                <td></td>
                                <td>{{ $course->fee }}</td>
                                <td class="text-center">
                                    <span class="badge {{ setStatus($course->status) }}">{{ $course->status }}</span>
                                </td>
                                <td class="project-actions text-center">{{ dateFormat($course->created_at) }}</td>
                                <td>
                                    <a href="{{ route('course.edit', $course->id) }}"><i class="fas fa-pencil-alt px-2"></i></a>
                                    <a type="button" class="delete" href="{{ route('course.destroy', $course->id) }}"><i class="fas fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">

                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <div class="d-flex my-3 justify-content-end mr-3">
                {{ $courses->links() }}
            </div>
        </div>
        <!-- /.card-body -->
    </div>
<!-- /.card -->

</section>
@endsection
