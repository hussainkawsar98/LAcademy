<div class="modal-dialog w-75">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Create Banner</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <!-- Errors List Show -->
      <form action="{{route('banner.store')}}" method="POST" id="ajax_form">
        @csrf
        <div class="row mb-3">
          <div class="form-group col-12">
            <label>Banner Title</label>
            <textarea name="title" class="form-control" id="" cols="30" rows="2"></textarea>
          </div>
          <div class="form-group col-12">
            <label>Body Text</label>
            <textarea name="body_text" class="form-control" id="" cols="30" rows="2"></textarea>
          </div>
          <div class="form-group col-4">
            <label>Button Text</label>
            <input name="pry_btn_text" type="text" class="form-control">
          </div> 
          <div class="form-group col-8">
            <label>Button Link</label>
            <input name="pry_btn_link" type="text" class="form-control">
          </div> 
          <div class="form-group col-4">
            <label>Button Text</label>
            <input name="snd_btn_text" type="text" class="form-control">
          </div> 
          <div class="form-group col-8">
            <label>Button Link</label>
            <input name="snd_btn_link" type="text" class="form-control">
          </div> 
          <div class="form-group col-12">
            <label>Image</label>
            <input name="image" class="w-100" name="profile" type="file">
            <span>Size: 1200px x 768px;</span><br>
          </div>
          <input type="submit" value="Save Banner" class="form-group btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>