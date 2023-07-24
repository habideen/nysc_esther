<!-- Static Backdrop Modal -->
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
  aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Upload Avatar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pt-4 pb-4">
        <div id="upload-demo"></div>
      </div>

      <form action="{{ route('updateAvatar') }}" method="post">
        @csrf
        <input type="text" class="readonly d-none" name="image_result" id="image_result" readonly>
        <div class="border-top p-3">
          <div class="d-flex">
            <button type="submit" class="btn btn-primary btn-upload-image">Upload</button>
            <div class="ms-auto">
              <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>