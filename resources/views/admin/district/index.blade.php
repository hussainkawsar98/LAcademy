@extends('admin.layouts.app')
@section('title', 'District | Develop by Muktar Hussain')
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Districts</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a type="button" class="btn btn-outline-primary btn_modal" href="{{ route('district.create') }}">Create District</a>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card w-50">
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th>District</th>
              <th>Thanas</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            @if ($districts->count())
            @foreach ($districts as $district)
            <tr>
              <td><a href="{{ route('district.show', $district->id) }}">{{ $district->name }}</a></td>
              <td>{{$district->thanas->count()}}</td>
              <td class="text-center">
                <a class="btn_modal" type="button" href="{{ route('district.edit', $district->id) }}"><i class="fas fa-pencil-alt px-2"></i></a>
                <a href="{{ route('district.destroy', $district->id) }}" type="button" class="delete"><i class="fas fa-trash text-danger"></i></a>
              </td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="5">
                <h5 class="text-center text-danger">No Districts Found.</h5>
              </td>
            </tr>
            @endif
          </tbody>
        </table>
        <div class="d-flex my-3 justify-content-end mr-3">
          {{ $districts->links() }}
        </div>
      </div>
    </div>
  </section>
@endsection('content')
