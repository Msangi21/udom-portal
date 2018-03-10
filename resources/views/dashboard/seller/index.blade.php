<!DOCTYPE html>
<html>
<head>
  
    <title>Seller</title>

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <!-- bxSlider CSS file -->
  <link href="../css/jquery.bxslider.css" type="text/css" rel="stylesheet" />
  <link href="../css/jquery.bxslider.min.css" type="text/css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <link rel="stylesheet" type="text/css" href="../css/font.css">

  <script src="../js/jquery-3.1.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="../js/jquery-ui/themes/base/theme.css">
  <link rel="stylesheet" type="text/css" href="../js/jquery-ui/themes/base/menu.css">
  <link rel="stylesheet" type="text/css" href="../js/jquery-ui/themes/base/autocomplete.css">
  <link rel="stylesheet" type="text/css" href="../js/jquery-ui/themes/base/core.css">

  <link rel="stylesheet" type="text/css" href="../css/index.css">

</head>
<body>

   <nav class="navbar navbar-default navbar-fixed-top" style="background-color: #2a497a; ">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="/" style="color: white">UDOM PORTAL</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">

        <ul class="nav navbar-nav navbar-right" >
          <li><a href="#home" style="color: white"><span class="glyphicon glyphicon-home"></span>
           Home
         </a></li>
         
         <li><a href="#price" style="color: white">
          Pricing
         </a></li>

         <li><a href="#contacts" style="color: white">
          Contact
         </a></li>

         <li><a href="/login" style="color: white">
          login
         </a></li>

       </ul>
     </div>
   </div>
 </nav>

 <header id="home" class="masthead bg-default text-white text-center">
  <div class="container">
    <div class="row">

      <div class="col-md-8" >
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="../img/images/2.jpg" class="img-responsive" alt="my products" style="width:100%;">
            </div>
      
            <div class="item">
              <img src="../img/images/5.jpg" alt="Smart Phone" style="width:100%;">
            </div>
          
            <div class="item">
              <img src="../img/images/8.jpg" alt="New york" style="width:100%;">
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

      <div class="col-md-4 text-justify">
        <h3><u>UDOM PORTAL</u></h3>
        <p style="font-size:17px">UDOM PORTAL - Is a web application which allow its users to advertise
          their products within the University of Dodoma (UDOM), It simplifies the products
          advertisement by reducing effort used by user to announse his/her products in many groups
          of <b>Social network</b> where some people will not see the notification.
        </p>
        <p style="font-size:17px">
          Using this portal it make easier for user to advertise the products and bussines
          and it will be visible to all people who visits the Portal.
        </p>
        <h3 class="my-3"><u>Advantages  of UDOM PORTAL</u></h3>
        <ul style="font-size:17px">
          <li>It save time</li>
          <li>Visited By many people</li>
          <li>Not Expensive for announse your Ads</li>
          <li>Free Consulitation</li>
        </ul>
      </div>

    </div>
</header>

{{-- Pricing Session --}}

<section class="price" id="price" style="background-color:#edeff2">
<center><h1 style="padding:20px"><b>Our Pricing</b></h1></center>

<div class="row col-md-offset-2">
  <!-- Pricing -->
  <div class="col-sm-3">
    <div class="pricing hover-effect">
      <div class="pricing-head">
        <h3>Free Account<span>
          Official For New Customer </span>
        </h3>
        <h4><i>tsh</i>0<i>.00</i>
        <span>
        Per Month </span>
        </h4>
      </div>
      <ul class="pricing-content list-unstyled" style="text-align: center">
        <li>
          Ads <span style="color:red;margin-left:13px">2</span>
        </li>
        <li>
          Ads priorit <span style="color:red;margin-left:13px">20%</span>
        </li>
        <li>
          Web Message <span style="color:red;margin-left:13px">0</span>
        </li>
        <li>
          Support <span style="color:red;margin-left:13px">No</span>
        </li>
        <li>
          consultation <span style="color:green; margin-left:13px" class="glyphicon glyphicon-ok">
        </li>
      </ul>
      <div class="pricing-footer">
        
        <a href="/home" class="btn yellow-crusta">
        Get it Now
        </a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="pricing hover-effect">
      <div class="pricing-head">
        <h3>Standard Account<span>
        Officia For  </span>
        </h3>
        <h4><i>ths</i>2,000<i>.00</i>
        <span>
        Per 2 Month </span>
        </h4>
      </div>
      
        <ul class="pricing-content list-unstyled" style="text-align: center">
          <li>
            Ads <span style="color:red;margin-left:13px">15</span>
          </li>
          <li>
            Ads priorit <span style="color:red;margin-left:13px">70%</span>
          </li>
          <li>
            Web Messages <span style="color:red;margin-left:13px">10</span>
          </li>
          <li>
            Support <span style="color:red;margin-left:13px">Yes</span>
          </li>
          <li>
            consultation <span style="color:green; margin-left:13px" class="glyphicon glyphicon-ok">
          </li>
        </ul>
     
      <div class="pricing-footer">
       
        <a href="javascript:;" class="btn yellow-crusta">
        Buy It Now
        </a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="pricing pricing-active hover-effect">
      <div class="pricing-head pricing-head-active">
        <h3>Premium Account<span>
        Official For Business </span>
        </h3>
        <h4><i>ths</i>4,000<i>.00</i>
        <span>
        Per 4 Month </span>
        </h4>
      </div>
      <ul class="pricing-content list-unstyled" style="text-align: center">
        <li>
          Ads <span style="color:red;margin-left:13px">50</span>
        </li>
        <li>
          Ads priorit <span style="color:red;margin-left:13px">100%</span>
        </li>
        <li>
          Web Messages <span style="color:red;margin-left:13px">Unlimited</span>
        </li>
        <li>
          Support <span style="color:red;margin-left:13px">Yes</span>
        </li>
        <li>
          consultation <span style="color:green; margin-left:13px" class="glyphicon glyphicon-ok">
        </li>
      </ul>
      <div class="pricing-footer">
        
        <a href="javascript:;" class="btn yellow-crusta">
        Buy It Now
        </a>
      </div>
    </div>
  </div>

</div>

</section>

<section class="price" id="contacts" style="background-color:#3d3d3d">
  <center><h1 style="padding:20px; padding-top:20px; color:white"><b>Our Contact</b></h1></center>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
          <div class="panel panel-default">
              <div class="panel-body" style="font-size:19px">
                <p><b>Address:</b> P.O. BOX 1196</p>
                <p><b>Contact 1:</b> +255766242951</p>
                <p><b>Contact 2:</b> +255786447520</p>
                <p><b>Email:</b> info@natmatech.co.tz</p>
                <p><b>Street:</b> PLOT No. 73 BLOCK F Kisasa B Center.</p>
                <p><b>Region:</b> Dodoma</p>
                <h4><u>More</u></h4>
                
                <p>Dar es Salaam road near Martin Luther School or Nesuda Dispensary opposite Maria Dematias</p>
              </div>
              
            </div>
      </div>

      <div class="col-sm-6">
          <div class="panel panel-default">
              <div class="panel-body">
                <h3><u>FeedBack</u></h3>
                <form >
                  <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control input-lg"  id="email" required>
                  </div>
                  <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="4" id="comment" required></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-default ">Submit</button>
                </form>
                </div>
            </div>
      </div>
      
    </div><br><br><br><br>
  </div>
</section>
@include('dashboard.partials.footer')
</body>
</html>