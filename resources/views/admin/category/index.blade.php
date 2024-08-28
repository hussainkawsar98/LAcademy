@extends('admin.layouts.app')
@section('title', 'Category | Develop by Muktar Hussain')
@section('content')
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Categories</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <a type="button" class="btn btn-outline-primary btn_modal" href="{{ route('category.create') }}">Create Category</a>
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
              <th>Category</th>
              <th>Parent Category</th>
              <th>Course Image</th>
              <th class="text-center">Total Course</th>
              <th class="text-center">Created Date</th>
              <th class="text-right">Action</th>
            </tr>
          </thead>
          <tbody>
            @if ($categories->count())
            @foreach ($categories as $category)
            <tr>
              <td><a href="#">{{ $category->name }}</a></td>
              <td>
                <ul>
                  @foreach ($category->childs as $child)
                  <li>
                    <a type="button" class="btn_modal" href="{{ route('category.edit', $child->id) }}">{{$child->name }}</a>
                    {{-- <a type="button" class="btn_modal" href="{{ route('category.edit', $child->id) }}">{{$child->name }}
                      <img src="{{ getImage('media/category', $child->image) }}" alt="">
                    </a>
                    <a href="{{ route('category.destroy', $child->id) }}" type="button" class="delete"><i class="fas fa-trash text-danger"></i></a> --}}
                  </li>
                  @endforeach
                  </ul>
                  <a href="#">{{ $category->parent ?$category->parent->name : '' }}</a>
              </td>
              <td>
                <img src="{{ getImage('media/category', $category->image) }}" width="100px" alt="" class="rounded">
              </td>
              <td class="text-center"><a href="">{{ $category->courses->count() }}</a></td>
              <td class="project-actions text-center">{{ dateFormat($category->created_at) }}</td>
              <td class="text-right">
                <a class="btn_modal" type="button" href="{{ route('category.edit', $category->id) }}"><i class="fas fa-pencil-alt px-2"></i></a>
                <a href="{{ route('category.destroy', $category->id) }}" type="button" class="delete"><i class="fas fa-trash text-danger"></i></a>
              </td>
            </tr>
            @endforeach
            @else
            <tr>
              <td colspan="5">
                <h5 class="text-center text-danger">No Categories Found.</h5>
              </td>
            </tr>
            @endif
          </tbody>
        </table>
        <div class="d-flex my-3 justify-content-end mr-3">
          {{ $categories->links() }}
        </div>
      </div>
    </div>
  </section>
@endsection('content')
