<div class="swal2-container swal2-center swal2-backdrop-show delete_message" style="overflow-y: auto; display:none;">
    <input type="hidden" id="deletelink">
    <div aria-labelledby="swal2-title" aria-describedby="swal2-content" class="swal2-popup swal2-modal swal2-show"
        tabindex="-1" role="dialog" aria-live="assertive" aria-modal="true" style="display:flex;">
        <div class="swal2-header">
            {{-- <button type="button" class="swal2-close" aria-label="Close this dialog">×</button> --}}
            <i class="bi bi-trash delete-trash"></i>
            <h2 class="swal2-title" id="swal2-title" style="display: flex;">Are you sure?</h2>

        </div>
        <div class="swal2-actions">
            <div class="swal2-loader"></div>
            <button type="button" class="swal2-confirm btn btn-danger" id="delete-confirm" aria-label=""
                style="display: inline-block;">Yes</button>
            <button type="button" class="swal2-cancel btn btn-primary ml-1" aria-label=""
                style="display: inline-block;" id="cancel-delete">No</button>
        </div>
        <div class="swal2-footer" style="display: none;"></div>
        <div class="swal2-timer-progress-bar-container">
            <div class="swal2-timer-progress-bar" style="display: none;"></div>
        </div>
    </div>
</div>
