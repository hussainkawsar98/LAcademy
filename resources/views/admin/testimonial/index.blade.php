@extends('admin.layouts.app')
@section('title', 'Banner | Develop by Muktar Hussain')
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Banners</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a type="button" class="btn btn-outline-primary btn_modal" href="{{ route('testimonial.create') }}">Create Testimonial</a>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th>Title</th>
              <th>Designation</th>
              <th>Text</th>
              <th>Image</th>
              <th class="text-center">Created Date</th>
              <th class="text-right">Action</th>
            </tr>
          </thead>
          <tbody>
            @if($testimonials->count())
            @foreach ($testimonials as $testimonial)
            <tr>
              <td><a href="{{ route('testimonial.edit', $testimonial->id) }}"><span class="btn_modal">{{ $testimonial->name }}</span></a></td>
              <td>{{ $testimonial->designation }}</td>
              <td>{{ $testimonial->text }}</td>
              <td><img src="{{ getImage('media/testimonial', $testimonial->image) }}" width="100px" alt="" class="rounded"></td>
              <td class="project-actions text-center">{{ dateFormat($testimonial->created_at) }}</td>
              <td class="text-right">
                <a href="{{ route('testimonial.destroy', $testimonial->id) }}" type="button" class="delete"><i class="fas fa-trash text-danger"></i></a>
              </td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="5">
                <h5 class="text-center text-danger">No Banner Found.</h5>
              </td>
            </tr>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection