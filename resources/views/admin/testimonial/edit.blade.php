<div class="modal-dialog w-75">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Create Testimonial</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <!-- Errors List Show -->
      <form action="{{route('testimonial.update', $testimonial->id)}}" method="POST" id="ajax_form">
        @csrf
        {{ method_field('PATCH') }}
        <div class="row mb-3">
          <div class="form-group col-6">
            <label>Name</label>
            <input name="name" value="{{$testimonial->name}}" class="form-control" id="" type="text">
          </div>
          <div class="form-group col-6">
            <label>Designation</label>
            <input name="designation" class="form-control" type="text">
          </div>
          <div class="form-group col-12">
            <label>Body Text</label>
            <textarea name="text" type="text" class="form-control" cols="100" rows="2"></textarea>
          </div> 
          <div class="form-group col-12">
            <label>Image</label>
            <input name="image" class="w-100" name="profile" type="file">
            <span>Size: 200px x 200px;</span><br>
          </div>
          <input type="submit" value="Save Testimonial" class="form-group btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>