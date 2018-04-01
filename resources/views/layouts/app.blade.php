<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/members.css" type="text/css" rel="stylesheet" />

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <!-- bxSlider CSS file -->
    <link href="../css/jquery.bxslider.css" type="text/css" rel="stylesheet" />
    

    <!-- Javascript file -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">
    pre {
        display: block;
        font-family: monospace;
        white-space: pre;
        margin: 1em 0;
    } 

    .hide-bullets {
        list-style:none;
        margin-left: -40px;
        margin-top:20px;
    }
    .item1 {
    
        max-width: 530px; 
        max-height: 490px;
        
      
      }
      .item1 img{
        height: auto; 
        width: auto; 
        max-width: 530px; 
        max-height: 490px;
        margin: 0;
        margin-left: auto;
          margin-right: auto;
          display: block;
      }
      .item2 img{
        height: auto; 
        width: auto; 
        max-width: 230px; 
        max-height: 195px;
        margin: 0;
        margin-left: auto;
          margin-right: auto;
          display: block;
      }

    .thumbnail {
        padding: 0;
    }

    .carousel-inner>.item>img, .carousel-inner>.item>a>img {
        width: 100%;
    }

    
            .status {
                font-family: 'Source Sans Pro', sans-serif;
            }
            .status .panel-title {
                font-family: 'Oswald', sans-serif;
                font-size: 72px;
                font-weight: bold;
                color: #fff;
                line-height: 45px;
                padding-top: 20px;
                letter-spacing: -0.8px;
            }
   
</style>
</head>
<body style="background-color: #edeff2">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-color:#2a497a">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/home') }}" style="color: white;">
                        {{ config('app.name') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="color: white;">
                        <!-- Authentication Links -->
                        @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: white;">
                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}  <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li><a href="/changePassword ">Change password</a></li>
                        </ul>
                    </li>
                    @if($day_status == true)
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: white;">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                    <span style="background:red" class="badge badge-important">1</span>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" >
                                        <li><a href="/accounts" style="color:red; font-size:17px">
                                            Your Account Has Expired<br>
                                            <strong>Please Click Here To Upgrade</strong>
                                        </a></li>
             
                                      </ul>
                    </li>
                    @endif

                    @if($ads_status == true)
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="color: white;">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                    <span style="background:red" class="badge badge-important">1</span>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" >
                                        <li><a href="/accounts" style="color:red; font-size:17px">
                                            You Have Reach The Maximum Number of Ads To Be Uploaded
                                            <br>
                                            <strong>Please Upgrade Your Account Here</strong> 
                                        </a></li>
             
                                      </ul>
                    </li>
                    @endif
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="row">
        <div class="col-sm-2" style="margin-left: 12px;">
            @include('dashboard.seller.partials.side_bar')
        </div>
        <div class="col-sm-8" >
            @include('dashboard.seller.partials.message')
            @yield('content')
        </div>
    </div>
</div>

@include('dashboard.partials.footer')




<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

{{-- <script type="text/javascript" src="../js/jquery.min.js"></script> --}}
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.bxslider.js"></script>


<script>




    function preview_images() 
    {
     var total_file=document.getElementById("images").files.length;
     for(var i=0;i<total_file;i++)
     {
      $('#image_preview').append("<div class='col-md-5'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
  }
}


function preview_main_images() 
{
 var total_file=document.getElementById("main_image").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_main_preview').append("<div class='col-md-5'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
}
}



$('#product_category').on('change',function(e){
  console.log(e);

  var sub_id = e.target.value;
  
  $.get('/product_sub_category?sub_id=' + sub_id,function(data){
    $('#product_sub_category').empty();
       // console.log(data);
       $.each(data,function(index,subCatObj){
        $('#product_sub_category').append('<option value="'+subCatObj.id+'">'+subCatObj.category_name+'</option>');
    });
   });
});

              // Show templete

              $(document).ready(function($) {

                $('#myCarousel').carousel({
                    interval: 5000
                });

        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
            var id_selector = $(this).attr("id");
            try {
                var id = /-(\d+)$/.exec(id_selector)[1];
                console.log(id_selector, id);
                jQuery('#myCarousel').carousel(parseInt(id));
            } catch (e) {
                console.log('Regex failed!', e);
            }
        });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
         var id = $('.item.active').data('slide-number');
         $('#carousel-text').html($('#slide-content-'+id).html());
     });
    });



              $(document).ready(function(){
                $('.bxslider').bxSlider({

                    infiniteLoop: false
                    
                });
            });

      // end of show templete

  </script>

</body>
</html>
