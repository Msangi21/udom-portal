@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
                <div class="col-md-10 col-md-offset-1">
                <div class="panel">
                    <h3 style="padding: 5px; padding-left:20px">All Token
                            <span class="pull-right" style="margin-right:17px">
                                    <a href="/home" class="btn btn-info " role="button">Home</a>
                                    </span>
                    </h3>
                    <hr>
                    <div class="panel-body">
                            <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Token</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($select as $item )
                                        <tr>
                                            <td>{{$item->token}}</td>
                                            <td>{{$item->amount}}</td>
                                            <td>
                                                @if($item->status == 1)
                                                <span style="color:red">Expired</span>
                                                @else
                                                <span style="color:blue">New</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($item->status != 1)
                                                <a href="/token/{{$item->id}}">
                                                <button type="submit" class="btn btn-warning">Edit</button>
                                                </a>
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