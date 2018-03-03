@extends('layouts.app')
@section('content')

<head>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel">

                <h3 style="padding: 5px;">Recent activity</h3>

                <hr>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if(count($details)>0)
                    @foreach($details as $detail)
                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnail">
                              <a href="storage/{{ $detail->image_path }}">
                                <img src="storage/{{ $detail->image_path }}" alt="{{ $detail->product_name }}" class="img-rounde" style="width:100%">
                                
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <p><b>Product Tile:</b></p> {{ $detail->product_name }}</p>
                        <p><b>Price:</b> <span style="color: red"> {{ $detail->price}} TSH</span></p>
                        <p><b>Product Description:</b><p> <pre>{{ str_limit($detail->description,50)}}</pre></p>
                        <i>Uploaded:{{ (new Carbon\Carbon($detail->created_at))->diffForHumans() }}</i>
                        <div class="pull-right">
                            <a href="/home/{{ $detail->id }}/edit" class="btn btn-info" role="button"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                            <a href="/home/{{ $detail->id }}" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-eye-open"></span> Show</a>
                            
                            <a class="btn btn-danger" data-toggle="modal" href='#{{ $detail->id }}'>
                                <span class="glyphicon glyphicon-trash">
                                </span> Delete</a>
                                <div class="modal " id="{{ $detail->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header ">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title">Confirmation</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p style="color: red">Are You Sure, You Want To Delete it?</p>
                                            </div>
                                            <div class="modal-footer">

                                                <form action="/home/{{ $detail->id }}" method="POST" role="form">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>

                                                    <button type="submit" class="btn btn-primary">
                                                        <span class="glyphicon glyphicon-trash">
                                                        </span> Delete</button>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                    </div><center>{{ $details->links() }}</center>

                    @else
                    <center><h3>No item added</h3></center>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </div>
    @endsection
