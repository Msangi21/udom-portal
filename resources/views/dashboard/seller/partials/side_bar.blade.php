
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
                <div class="panel panel-primary" >
                    <div class="panel-heading" >
                        <h4 class="panel-title" >
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Content</a>
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
                                        <span class="glyphicon glyphicon-plus text-info"></span><a href=""><span style="padding: 12px">Upgrade</span></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       
                                        <span class="glyphicon glyphicon-stats text-success"></span><a href="/address/{{Auth::id()}}/edit"><span style="padding: 12px">Status</span></a>

                                        
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
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Modules</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Orders</a> <span class="label label-success">$ 320</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Invoices</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Shipments</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="http://www.jquery2dotnet.com">Tex</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
               
            </div>
        </div>
       
    </div>


    {{-- For smartphone --}}

</div>