@extends('admin.layouts.app')
@section('title', 'District | Develop by Muktar Hussain')
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{$district->name}}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a type="button" class="btn btn-outline-primary" href="{{ route('district.index') }}">District</a>
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
              <th>Thana</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($thanas as $thana)
            <tr>
              <td>{{ $thana->name }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
@endsection('content')
