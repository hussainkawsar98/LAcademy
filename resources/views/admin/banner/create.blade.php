<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Create Category</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <!-- Errors List Show -->
      <form action="{{route('category.store')}}" method="POST" id="ajax_form">
        @csrf
        <div class="row mb-3">
          <div class="form-group col-12">
            <label>Category Name</label>
            <input name="name" type="text" class="form-control">
          </div>
          <div class="form-group col-12">
            <label>Parent Category</label>
            <select name="parent_id" class="form-control">
              <option value="" selected desabled>Select Parent Category</option>
              @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-12">
            <label>Status</label>
            <select name="status" class="form-control">
              <option value="Active">Active</option>
              <option value="Inactive">Inactive</option>
            </select>
          </div>
          <div class="form-group col-12">
            <label>Image</label>
            <input name="image" class="w-100" name="profile" type="file">
            <span>Size: 400px x 300px;</span><br>
          </div>
          <input type="submit" value="Save Category" class="form-group btn btn-primary">
      </form>
    </div>
  </div>
</div>