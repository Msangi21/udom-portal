@extends('layouts.app')

@section('content')
<div class="container">

     <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel ">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
	<div id="collapse2" class="panel-collapse collapse in">
		 <h3 style="padding: 5px">Personal Address</h3>
     <hr>
           <form class="form-horizontal" role="form" method="POST" action="/address/{{ Auth::User()->id }}">
           	{{ csrf_field() }}
           	{{ method_field('PATCH') }}
          <div class="form-group">
            <label class="col-lg-3 control-label">Mobile 1:</label>
            <div class="col-lg-8">
              <input class="form-control" name="mobile1" type="text" value="{{ isset($userDetail->mobile1) ? $userDetail->mobile1 : old('name') }}" placeholder="0718266302" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Mobile 2:</label>
            <div class="col-lg-8">
              <input class="form-control" name="mobile2" type="text" value="{{ isset($userDetail->mobile2) ? $userDetail->mobile2 : old('name') }}" placeholder="0712900033" required>
            </div>
          </div>
       
          <div class="form-group">
            <label class="col-lg-3 control-label">College:</label>
            <div class="col-lg-8">
              {{-- <input class="form-control" name="collage" type="text" value="{{ isset($userDetail->collage) ? $userDetail->collage : old('name') }}" placeholder="CIVE"> --}}
              <select name="collage" id="collage" class="form-control" required="required">
                <option value="">--College--</option>

                @foreach($detail as $details)
                <option value="{{ $details->id }}">{{ $details->college_name }}</option>
                @endforeach

              </select>
            </div>
          </div>
          
          
          <div class="form-group">
            <label class="col-md-3 control-label">Block:</label>
            <div class="col-md-8">
              <input class="form-control" name="block" type="text" value="{{ isset($userDetail->block_no) ? $userDetail->block_no : old('name') }}" placeholder="Block 6">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Room:</label>
            <div class="col-md-8">
              <input class="form-control" name="room" type="text" value="{{ isset($userDetail->room) ? $userDetail->room: old('name') }}" placeholder="S01">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              
            </div>
          </div>
        </form>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
