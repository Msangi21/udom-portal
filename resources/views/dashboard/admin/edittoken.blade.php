@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
                <div class="col-md-10 col-md-offset-1">
                <div class="panel">
                    <h3 style="padding: 5px; padding-left:20px">All Token
                            <span class="pull-right" style="margin-right:17px">
                                    <a href="/all-token" class="btn btn-info " role="button">All Token</a>
                                    </span>
                    </h3>
                    <hr>
                    <div class="panel-body">
                        <form action="/update-token/{{$token->id}}" method="POST">
                            {{csrf_field()}}
                           
                        <div class="form-group col-sm-5">
                            <label for="token_no">Token:</label>
                            <input type="text" value="{{ isset($token->token) ? $token->token : old('name') }}" name="token" class="form-control" id="token_no" required>
                        </div>
                        <div class="form-group col-sm-5">
                        <label for="level">Select list:</label>
                        <select class="form-control" name="level" id="level" required>
                            <option value="">--Select level--</option>
                            <option value="{{1000}}">Standard</option>
                            <option value="{{2000}}">Premium</option>
                        </select>
                        </div>
                        <div class="form-group"> 
                                <div class="col-sm-offset-0 col-sm-10">
                                  <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                              </div>
                        </form>
                    </div>
                </div>
                </div>
        </div>
</div>

@endsection