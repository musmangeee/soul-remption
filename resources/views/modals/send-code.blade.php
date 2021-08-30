<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
      <form action="{{route('storecode')}}" method="POST" novalidate>
        @csrf
        <h6 class="card-title">SEND CODE</h6>
			<p class="card-description"> <a href="https://www.npmjs.com/package/jquery-tags-input" target="_blank"></a></p>
				<p class="mb-2">ENTER EMAIL TO SEND THE CODE</p>
				<div>
					<input type="email" name="tags" id="tags" placeholder="john.doe@company.com" required/>
				</div>
          </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
        <button type="submit" class="btn btn-primary">SEND CODE</button>
      </div>
      </form>
    </div>
  </div>
</div>
