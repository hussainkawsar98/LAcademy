<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Create District</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <!-- Errors List Show -->
      <form action="{{route('district.store')}}" method="POST" id="ajax_form">
        @csrf
        <div class="row mb-3">
          <div class="form-group col-12">
            <label>District Name</label>
            <input name="name" type="text" class="form-control">
          </div>
          <input type="submit" value="Save District" class="form-group btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>