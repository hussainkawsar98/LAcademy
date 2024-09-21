@extends('admin.layouts.app')
@section('title', 'Banner | Develop by Muktar Hussain')
@section('content')
  <!-- Main content -->
  <section class="content w-75">
      <div class="card px-3 py-3">
        <div class="row">
          <div class="col-sm-6">
            <h3>Banners</h3>
          </div>
          <div class="col-sm-6">
            <ol class="float-sm-right">
              <a type="button" class="btn btn-outline-primary" href="{{ route('banner.index') }}">Banners</a>
            </ol>
          </div>
        </div>

        <form action="{{ route('banner.update', $banner->id) }}" method="POST" id="ajax_form">
          @csrf
          {{ method_field('PATCH') }}
          <div class="row mb-3">
            <div class="form-group col-12">
              <label>Banner Title</label>
              <textarea name="title" class="form-control" id="" cols="30" rows="2">{{$banner->title}}</textarea>
            </div>
            <div class="form-group col-12">
              <label>Body Text</label>
              <textarea name="body_text" class="form-control" id="" cols="30" rows="2">{{$banner->title}}</textarea>
            </div>
            <div class="form-group col-4">
              <label>Button Text</label>
              <input name="pry_btn_text" value="{{$banner->title}}" type="text" class="form-control">
            </div> 
            <div class="form-group col-8">
              <label>Button Link</label>
              <input name="pry_btn_link" value="{{$banner->title}}" type="text" class="form-control">
            </div> 
            <div class="form-group col-4">
              <label>Button Text</label>
              <input name="snd_btn_text" value="{{$banner->title}}" type="text" class="form-control">
            </div> 
            <div class="form-group col-8">
              <label>Button Link</label>
              <input name="snd_btn_link" value="{{$banner->title}}" type="text" class="form-control">
            </div> 
            <div class="form-group col-12">
              <label>Image</label>
              <img src="{{ getImage('media/banner', $banner->image) }}" class="img-fluid d-block mb-3"  alt="">
              <input name="image" class="w-100" name="profile" type="file">
              <span>Size: 1200px x 768px;</span><br>
            </div>
            <input type="submit" value="Update Banner" class="form-group btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection
