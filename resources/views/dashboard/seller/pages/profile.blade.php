@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel">

		 <h3 style="padding: 5px">Personal info
        <span class="pull-right" style="margin-right:17px">
            <a href="/home" class="btn btn-info " role="button">Home</a>
         </span>
     </h3>
		 <hr>
           <form class="form-horizontal" role="form" method="POST" action="/profile/{{ Auth::User()->id }}">

           	{{ csrf_field() }}
           	{{ method_field('PATCH') }}

          <div class="form-group">
            <label class="col-lg-3 control-label">First name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="first_name" type="text" value="{{ isset($user->first_name) ? $user->first_name : old('name') }}">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Last name:</label>
            <div class="col-lg-8">
              <input class="form-control" name="last_name" type="text" value="{{ isset($user->last_name) ? $user->last_name : old('name') }}">
            </div>
          </div>
       
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="{{ isset($user->email) ? $user->email : old('email') }}">
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
        </div>
    </div>
</div>
@endsection
