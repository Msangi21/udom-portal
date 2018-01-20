<div class="col-sm-10 pull-right">

 @if(session()->has('message'))
	 <div class="alert alert-success alert-dismissable">
	 <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	 <strong>
	 	Success!
	 </strong>
		{{ session()->get('message') }}
	 </div>

	 @elseif(session()->has('error'))
	 <div class="alert alert-warning alert-dismissable">
       <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
       <strong>Error !</strong>
           {{ session()->get('error') }}

      </div>
@endif

</div>