   @extends('frontend.frontend_dashboard_master')
@section('frontend_content')
<h3>Create New Group</h3>

  <div class="card shadow mb-4">
   <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">UserGroup</h6>
                        </div>
                       
                        <div class="card-body">
                        	<div class="row justify-content-md-center">
                        		<div class="col-md-6">
                        			
                        	
          <form action="{{route('backend.groups')}}" method="post">
          	@csrf
  <fieldset>
    <legend>Disabled fieldset example</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="Input Group Title">
    </div>
   
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
	</div>
         </div>
             </div>
                    </div>



@endsection