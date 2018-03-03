@extends('layouts.app')

@section('content')

<div class="container" >

   
    <div class="row">
        

        <div class="col-md-10 col-md-offset-1">

            <div class="panel">

                <h3 style="padding: 5px; padding-left:20px">Account Status
                        <span class="pull-right" style="margin-right:17px">
                                <a href="/home" class="btn btn-info " role="button">Home</a>
                             </span>
                </h3>
                
                <hr>
                <div class="panel-body">
                        <div class="panel panel-default">
                                <div class="panel-heading">Status </div>
                                <div class="panel-body">
                                        <div class="row">
                                                <div class="col-md-3">
                                                    
                                                    <div class="panel status panel-primary">
                                                        <div class="panel-heading">
                                                            <p class="panel-title text-center">{{$status->level}}</p>
                                                        </div>
                                                        <div class="panel-body text-center">                        
                                                            <strong>Account Level</strong>
                                                        </div>
                                                    </div>
                                        
                                                </div>          
                                                <div class="col-md-3">
                                                  
                                                    <div class="panel status panel-info">
                                                        <div class="panel-heading">
                                                            <h1 class="panel-title text-center">{{$status->total}}</h1>
                                                        </div>
                                                        <div class="panel-body text-center">                        
                                                            <strong>Ads Uploaded</strong>
                                                        </div>
                                                    </div>
                                        
                                                </div>
                                                <div class="col-md-3">
                                                   
                                                    <div class="panel status panel-success">
                                                        <div class="panel-heading">
                                                            <h1 class="panel-title text-center">{{$ads_reamin}}</h1>
                                                        </div>
                                                        <div class="panel-body text-center">                        
                                                            <strong>Ads Remain</strong>
                                                        </div>
                                                    </div>
                                        
                                                 
                                                </div>
                                                <div class="col-md-3">
                                                  
                                                    <div class="panel status panel-danger">
                                                        <div class="panel-heading">
                                                            <h1 class="panel-title text-center">{{$days_remain}}</h1>
                                                        </div>
                                                        <div class="panel-body text-center">                        
                                                            <strong>Days Left To Expire</strong>
                                                        </div>
                                                    </div>
                                        
                                                 
                                                </div>
                                            </div>
                                            

                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <p><b>Name:</b> {{$name}}</p>
                                                    <p><b>Acount Type:</b>
                                                        @if($level == 1)
                                                        Free Account
                                                        @elseif($level == 2)
                                                        Standard Account
                                                        @elseif($level == 3)
                                                        Premium Account
                                                        @endif
                                                    </p>
                                                    <p><b>Created Time:</b>
                                                        {{(new Carbon\Carbon($status->time))->diffForHumans()}}
                                                    </p>
                                                </div>

                                            </div>
                                </div>
                        
                            </div>
                            <div class="panel panel-default">
                                    <div class="panel-heading">Upgrade Your Account Here</div>
                                    <div class="panel-body">
                                            <div class="row">

                                                    <div class="col-md-4">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading text-center" style="padding:28px;">
                                                            <h3>
                                                            Free Account</h3>
                                                            <p style="color:black"><b>For 1 Month</b></p>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                                <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">Ads <span style="color:red;margin-left:13px">2</span></li>
                                                                <li class="list-group-item">Ads priority <span style="color:red;margin-left:13px">20%</span></li>
                                                                <li class="list-group-item">Web Message <span style="color:red;margin-left:13px">0</span></li>
                                                                <li class="list-group-item">Support <span style="color:red;margin-left:13px">No</span></li>
                                                                <li class="list-group-item">consultation <span style="color:green; margin-left:13px" class="glyphicon glyphicon-ok"></li>
                                                                </ul>
                                                                <button type="button" class="btn btn-info disabled">We Ofter You It for Free</button>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                            <div class="panel panel-warning">
                                                            <div class="panel-heading text-center" style="padding:28px;">
                                                                <h3>Standard Account</h3>
                                                                <p style="color:black"><b>Tsh 4,000/= For 2 Month</b></p>
                                                            </div>
                                                            <div class="panel-body text-center">
                                                                    <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">Ads <span style="color:red;margin-left:13px">15</span></li>
                                                                    <li class="list-group-item">Ads priority <span style="color:red;margin-left:13px">70%</span></li>
                                                                    <li class="list-group-item">Web Message <span style="color:red;margin-left:13px">10</span></li>
                                                                    <li class="list-group-item">Support <span style="color:red;margin-left:13px">Yes</span></li>
                                                                    <li class="list-group-item">consultation <span style="color:green; margin-left:13px" class="glyphicon glyphicon-ok"></li>
                                                                    </ul>
                            
                                                                   <a href="/standard"> <button type="button" class="btn btn-warning">Buy it Now</button></a>
                                                            </div>
                                                            </div>
                            
                                                    </div>
                                                    <div class="col-md-4">
                                                            <div class="panel panel-danger text-center">
                                                            <div class="panel-heading text-center" style="padding:28px;">
                                                                <h3>Premium Account</h3>
                                                                <p style="color:black"><b>Tsh 8,500/= For 4 Month</b></p>
                                                            </div>
                                                            <div class="panel-body">
                                                                    <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item">Ads <span style="color:red;margin-left:13px">50</span></li>
                                                                    <li class="list-group-item">Ads priority <span style="color:red;margin-left:13px">100%</span></li>
                                                                    <li class="list-group-item">Web Message <span style="color:red;margin-left:13px">Unlimited</span></li>
                                                                    <li class="list-group-item">Support <span style="color:red;margin-left:13px">Yes</span></li>
                                                                    <li class="list-group-item">consultation <span style="color:green; margin-left:13px" class="glyphicon glyphicon-ok"></li>
                                                                    </ul>
                            
                                                           <a href="/premium"> <button type="button" class="btn btn-danger">Buy it Now</button></a>
                                                            </div>
                            
                                                    </div>
                            
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
