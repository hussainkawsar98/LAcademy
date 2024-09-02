<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Edit District</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Errors List Show -->
            <form action="{{ route('district.update', $district->id) }}" method="POST" id="ajax_form">
                @csrf
                {{ method_field('PATCH') }}
                <div class="row mb-3">
                <div class="form-group col-12">
                    <label>District</label>
                    <input name="name" value="{{ $district->name }}" type="text" class="form-control">
                </div>
                <input type="submit" value="Update District" class="form-group btn btn-primary">
            </form>
        </div>
    </div>
</div>
