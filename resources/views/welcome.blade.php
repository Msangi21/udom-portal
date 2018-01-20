<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> @yield('title')</title>

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <!-- bxSlider CSS file -->
  <link href="../css/jquery.bxslider.css" type="text/css" rel="stylesheet" />
  <link href="../css/jquery.bxslider.min.css" type="text/css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <link rel="stylesheet" type="text/css" href="../css/font.css">

  <link rel="stylesheet" type="text/css" href="../js/jquery-ui/themes/base/theme.css">
  <link rel="stylesheet" type="text/css" href="../js/jquery-ui/themes/base/menu.css">
  <link rel="stylesheet" type="text/css" href="../js/jquery-ui/themes/base/autocomplete.css">
  <link rel="stylesheet" type="text/css" href="../js/jquery-ui/themes/base/core.css">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style type="text/css">

 .no-padding{
  padding-right:2px;
    padding-left:5px;
 }
  .SearchIcon
  {
    color:#2a497a;

  }
  .SearchButton
  {
    background-color:#2a497a;
    border-radius:1px;
  }
  .SearchButton:hover{
    background-color:#C4161C;
  }

  .SearchBar{

  }

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

    .thumbnail {
        padding: 0;
    }

    .carousel-inner>.item>img, .carousel-inner>.item>a>img {
        width: 100%;
        height: auto;
    }
</style>

</head>
<body style="background-color: #edeff2">

  <nav class="navbar navbar-default" style="background-color: #2a497a; ">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="/" style="color: white">UDOM PORTAL</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">

        <ul class="nav navbar-nav navbar-right" >
          <li><a href="/seller" style="color: white"><span class="glyphicon glyphicon-plus"></span>
           Post your Ad
         </a></li>
         @auth
         <li><a href="/home" style="color: white"><span class="glyphicon glyphicon-home"></span>
           Home
         </a></li>
         @else
         <li><a href="/login" style="color: white"><span class="glyphicon glyphicon-log-in"></span>
           Register/Login
         </a></li>
         @endauth


       </ul>
     </div>
   </div>
 </nav>
 <div class="row">

  <div class="col-xs-3 hidden-xs">
    <span class="pull-right" style="font-size: 25px;color: #ffbf00"><i>UDOM PORTAL</i></span>
  </div>

<!--Searching input -->
  <div class="col-sm-9">

    <div class="row">

      {{-- <div class="col-xs-2 visible-xs">
       
      </div> --}}

      <div class="col-xs-9">
        <form action="/search" method="GET">
          {{ csrf_field() }}
        <div class="input-group" style="padding-left: 10px">
          <input type="text" name="search" id="search" class="form-control SearchBar" placeholder="Search for..." required>
          <span class="input-group-btn">
            <button class="btn btn-primary" type="submit">
              Search
            </button>
          </span>
        </div><!-- /input-group -->
      </form>
      </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
  
  </div>

</div>

<div class="row">

  <div class="container col-xs-10 col-sm-offset-1 hidden-xs">
    @if(Request::is('/'))
    <nav class="dropdownmenu" >
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="#">Electrical</a>
          <ul id="submenu">
            <li><a href="/link/1">Cell Phone & Accessories</a></li>
            <li><a href="/link/2">Cameras</a></li>
            <li><a href="/link/3">Tablets</a></li>
            <li><a href="/link/4">Computers</a></li>
          </ul>
        </li>
        <li><a href="#">Fashion</a>
          <ul id="submenu">
            <li><a href="/link/5">Men's</a></li>
            <li><a href="/link/6">Women's</a></li>
            <li><a href="/link/7">Kid's</a></li>
          </ul>
        </li>
        <li><a href="#">Motor's</a>
          <ul id="submenu">
            <li><a href="/link/8">Cars</a></li>
            <li><a href="/link/9">Motorcycles</a></li>
            <li><a href="/link/10">Parts & Accessories</a></li>
          </ul>
        </li>
        <li><a href="#">Home</a>
          <ul id="submenu">
            <li><a href="/link/11">Furniture</a></li>
            <li><a href="/link/12">Kitchen Tools</a></li>
          </ul>
        </li>
        <li><a href="#">Sports</a>
          <ul id="submenu">
            <li><a href="/link/13">Exercise & Fitness</a></li>
            <li><a href="/link/14">Tools</a></li>
          </ul>
        </li>
        <li>
          <a href="">About us</a>
        </li>
      </ul>
    </nav>
    @endif
  </div>
  
</div>

@yield('content')


@include('dashboard.partials.footer')

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

{{-- <script type="text/javascript" src="../js/jquery.min.js"></script> --}}
<script type="text/javascript" src="../js/bootstrap.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/jquery.bxslider.js"></script>
{{-- <script type="text/javascript" src="../js/jquery-ui/ui/widgets/autocomplete.js"></script> --}}
<script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js" ></script>



<script type="text/javascript">

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

      infiniteLoop: false,
      

    });
  });

   //autocomplete search

  $('#search').autocomplete({
  
    source: "{{ URL::to('searchajax') }}",
     minLength:3,
    select:function(key,value){
      //console.log(value)
    }
  })

 
</script>
</body>
</html>
