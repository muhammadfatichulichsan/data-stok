@if(Session('success'))
	<div class="alert alert-success">
		{{ Session('success') }}	
	</div>
@endif
@if(Session('danger'))
	<div class="alert alert-danger">
		{{ Session('danger') }}	
	</div>
@endif
@if(Session('info'))
	<div class="alert alert-info">
		{{ Session('info') }}	
	</div>
@endif