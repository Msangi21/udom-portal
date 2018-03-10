
<head>
     {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}

     <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

     <style type="text/css">
    body{margin-top:50px;}
.glyphicon { margin-right:5px; }
.panel-body { padding:0px; }
.panel-body table tr td { padding-left: 10px }
.panel-body .table {margin-bottom: 0px; }
</style>
  
</head>




<div class="container">
    <div class="row " >
        <div class="col-sm-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-primary hidden-xs" >
                    <div class="panel-heading" >
                        <h4 class="panel-title" >
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-menu-hamburger">
                            </span><span style="margin-left:12px">Menu</span></a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-home text-primary"></span><a href="/home"><span style="padding: 12px">Summary</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        @auth
                                        <span class="glyphicon glyphicon-user text-success"></span><a href="/profile/{{Auth::id()}}/edit"><span style="padding: 12px">Profile</span></a>
                                        @endauth
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-upload text-info"></span><a href="/post"><span style="padding: 12px">Post</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-plus text-info"></span><a href="/accounts"><span style="padding: 12px">My Acount</span></a>
                                        
                                            @if($num != 0)
                                                @if($result->account_level == 1)
                                                <span class="badge" style="background-color:yellow; color:black ">
                                                Offer, A Free
                                                </span>
                                                @elseif($result->account_level == 2)
                                                <span class="badge" style="background-color:orange; color:black ">
                                                Standard Level
                                                </span>
                                                @elseif($result->account_level == 3)
                                                <span class="badge" style="background-color:#f90606; color:black ">
                                                Primium Level
                                                </span>
                                                @endif
                                            @else
                                            <span class="badge" style="background-color: red">
                                            Get Account Now!
                                            </span>
                                            @endif

                                         
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       
                                        <span class="glyphicon glyphicon-stats text-success"></span><a href="/address/{{Auth::id()}}/edit"><span style="padding: 12px">Status 
                                        </span></a> 

                                        
                                            @if(Auth::User()->status == false)
                                            <span class="badge" style="background: red">
                                            Incomplete 
                                            </span>
                                            @else
                                            <span class="badge" style="background: green">
                                            Complete
                                            </span>
                                            @endif

                                            
                                        
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                  <div class="panel panel-primary visible-xs">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-menu-hamburger">
                            </span><span style="padding-left:12px">Menu</span></a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-home text-primary"></span><a href="/home"><span style="padding: 12px">Summary</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        @auth
                                        <span class="glyphicon glyphicon-user text-success"></span><a href="/profile/{{Auth::id()}}/edit"><span style="padding: 12px">Profile</span></a>
                                        @endauth
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-upload text-info"></span><a href="/post"><span style="padding: 12px">Post</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-plus text-info"></span><a href="/accounts"><span style="padding: 12px">My Acount</span></a>
                                        
                                            @if($num != 0)
                                                @if($result->account_level == 1)
                                                <span class="badge" style="background-color:yellow; color:black ">
                                                Offer, A Free
                                                </span>
                                                @elseif($result->account_level == 2)
                                                <span class="badge" style="background-color:orange; color:black ">
                                                Standard Level
                                                </span>
                                                @elseif($result->account_level == 3)
                                                <span class="badge" style="background-color:#f90606; color:black ">
                                                Primium Level
                                                </span>
                                                @endif
                                            @else
                                            <span class="badge" style="background-color: red">
                                            Get Account Now!
                                            </span>
                                            @endif

                                         
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       
                                        <span class="glyphicon glyphicon-stats text-success"></span><a href="/address/{{Auth::id()}}/edit"><span style="padding: 12px">Status 
                                        </span></a> 

                                        
                                            @if(Auth::User()->status == false)
                                            <span class="badge" style="background: red">
                                            Incomplete 
                                            </span>
                                            @else
                                            <span class="badge" style="background: green">
                                            Complete
                                            </span>
                                            @endif

                                            
                                        
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>  
                
                @if(Auth::User()->isAdmin == true)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                <span class="glyphicon glyphicon-user">
                            </span><span style="padding-left:12px">Admin</span></a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="/add-token">Add Token</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Notifications</a> <span class="label label-info">5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#">Import/Export</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-trash text-danger"></span><a href="#" class="text-danger">
                                            Delete Account</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
       
    </div>


    {{-- For smartphone --}}

</div>