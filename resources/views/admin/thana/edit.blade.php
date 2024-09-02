<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Thana</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- Errors List Show -->
        <form action="{{ route('thana.update', $thana->id) }}" method="POST" id="ajax_form">
            @csrf
            {{ method_field('PATCH') }}
          <div class="row mb-3">
            <div class="form-group col-12">
              <label>Name</label>
              <input name="name" type="text" value="{{$thana->name}}" class="form-control">
            </div>
            <div class="form-group col-12">
              <label>District</label>
              <select name="district_id" class="form-control">
                <option value="" selected desabled>Select District</option>
                @foreach($districts as $district)
                <option value="{{ $district->id }}" {{ $thana->district_id == $district->id ? 'selected' : '' }}>{{ $district->name }}</option>
                @endforeach
              </select>
            </div>
            <input type="submit" value="Save Thana" class="form-group btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>