<div class="modal fade" id="edittrailer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">EDIT TRAILER & POSTER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>   
      </div>
      <form action="{{route('storrtrailer')}}" method="POST" enctype='multipart/form-data'>
       @csrf
      <div class="modal-body">
          <lable>EDIT TRAILER</lable>
      <input type="file" name="trailer" class="form-control" required>
      </div>
      <div class="modal-body">
      <lable>EDIT POSTER</lable>
       <input type="file" name="trailer_poster" class="form-control" required>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
        <button type="submit" class="btn btn-primary">EDIT</button>
      </div>
</form>
    </div>
  </div>
</div>