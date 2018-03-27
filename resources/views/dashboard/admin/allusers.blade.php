@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
                <div class="col-md-10 col-md-offset-1">
                <div class="panel">
                    <h3 style="padding: 5px; padding-left:20px">All Users
                            <span class="pull-right" style="margin-right:17px">
                                    <a href="/home" class="btn btn-info " role="button">Home</a>
                                    </span>
                    </h3>
                    <hr>
                    <div class="panel-body">
                            <table class="table table-bordered table-responsive">
                                    <thead>
                                      <tr>
                                        <th>First Nme</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Level</th> 
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user )
                                        <tr>
                                            <td>{{$user->first_name}}</td>
                                            <td>{{$user->last_name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>
                                                @if($user->status == 1)
                                                Full Registration
                                                @else
                                                Partial Registration
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->level == 1)
                                                <span style="color:blue">Free Acount</span>
                                                @elseif($user->level == 2)
                                                <span style="color:yellow">Standard Acount</span>
                                                @elseif($user->level == 3)
                                                <span style="color:red">Premium Acount</span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
     
                                    </tbody>
                                  </table>
                    </div>
                </div>
                </div>
        </div>
</div>

@endsection