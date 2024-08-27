<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Edit Category</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <!-- Errors List Show -->
      <form action="{{route('category.update', $category->id)}}" method="POST" id="ajax_form">
        @csrf
        {{ method_field('PATCH') }}
        <div class="row mb-3">
          <div class="form-group col-12">
            <label>Category Name</label>
            <input name="name" value="{{$category->name}}" type="text" class="form-control">
          </div>
          <div class="form-group col-12">
            <label>Status</label>
            <select name="status" class="form-control">
              <option value="Active" {{ $category->status=='Active'?'selected':'' }}>Active</option>
              <option value="Inactive" {{ $category->status=='Inactive'?'selected':'' }}>Inactive</option>
            </select>
          </div>
          <div class="form-group col-12">
            <label>Image</label>
            <input name="image" class="w-100" name="profile" type="file">
            <span>Size: 400px x 300px;</span><br>
          </div>
          <input type="submit" value="Update Category" class="form-group btn btn-primary">
      </form>
    </div>
  </div>
</div>