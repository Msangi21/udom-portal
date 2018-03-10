@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
                <div class="col-md-10 col-md-offset-1">
                <div class="panel">
                    <h3 style="padding: 5px; padding-left:20px">Add Token
                            <span class="pull-right" style="margin-right:17px">
                                    <a href="/home" class="btn btn-info " role="button">Home</a>
                                    </span>
                    </h3>
                    <hr>
                    <div class="panel-body">
                        <form action="/send-token" method="POST">
                            {{csrf_field()}}
                        <div class="form-group col-sm-5">
                            <label for="token_no">Token:</label>
                            <input type="text" name="token_no" class="form-control" id="token_no" required>
                        </div>
                        <div class="form-group col-sm-5">
                        <label for="level">Select list:</label>
                        <select class="form-control" name="level" id="level" required>
                            <option value="">--Select level--</option>
                            <option value="{{1000}}">Standad</option>
                            <option value="{{2000}}">Primer</option>
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