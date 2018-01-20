@extends('welcome')
@section('title','Buy & Sell with UDOM-PORTAL')
@section('content')

<div class="container-fluid">
  <div class="row hidden-xs" style="padding-left: 12px;">
    <h4>Categories</h4>
  </div>
<div class="row hidden-xs">

<div class="col-sm-2">
    <ul >
      <li><a href="#">Electrical</a>
        <ul>
          <li><a href="{{ URL::to('/link/1') }}">Cell Phone & Accessories</a></li>
          <li><a href="{{ URL::to('/link/2') }}">Cameras</a></li>
          <li><a href="{{ URL::to('/link/3') }}">Tablets</a></li>
          <li><a href="{{ URL::to('/link/4') }}">Computers</a></li>
        </ul>
      </li>

      <li><a href="#">Fashion</a>
        <ul >
          <li><a href="{{ URL::to('/link/5') }}">Men's</a></li>
          <li><a href="{{ URL::to('/link/6') }}">Women's</a></li>
          <li><a href="{{ URL::to('/link/7') }}">Kid's</a></li>
        </ul>
      </li>

      <li><a href="#">Motor's</a>
        <ul>
          <li><a href="{{ URL::to('/link/8') }}">Cars</a></li>
          <li><a href="{{ URL::to('/link/9') }}">Motorcycles</a></li>
          <li><a href="{{ URL::to('/link/10') }}">Parts & Accessories</a></li>
        </ul>
      </li>

      <li><a href="#">Home</a>
        <ul>
          <li><a href="{{ URL::to('/link/11') }}">Furniture</a></li>
          <li><a href="{{ URL::to('/link/12') }}">Kitchen Tools</a></li>
        </ul>
      </li>

      <li><a href="#">Sports</a>
        <ul >
          <li><a href="{{ URL::to('/link/13') }}">Exercise & Fitness</a></li>
          <li><a href="{{ URL::to('/link/14') }}">Tools</a></li>
        </ul>
      </li>

    </ul>
  </div>


    <div class="col-sm-9 hidden-xs">

      <div class="panel panel-default pull-left">

        <h4 style="padding: 5px;">{{ $products->product_name }}

          <a href="/" class="pull-right" style="padding-right: 15px">Back</a>

        </h4>


        <hr>
        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif

          <div id="main_area">
            <!-- Slider -->
            <div class="row">

             <div class="col-sm-7">
              <div class="col-xs-12" id="slider">
                <!-- Top part of the slider -->
                <div class="row">
                  <div class="col-sm-12" id="carousel-bounding-box" >
                    <div class="carousel slide" id="myCarousel">
                      <!-- Carousel items -->
                      <div class="carousel-inner">
                        <div class="active item" data-slide-number="0">
                          <img src="{{ URL::to('/') }}/storage/{{ $products->image_path }}"></div>

                          @if(count($images) > 0)

                          @foreach($images as $key=>$image)

                          <div class="item" data-slide-number="{{ $key }}">
                            <img src="{{ URL::to('/') }}/storage/{{ $image->image_path }}"></div>

                            @endforeach

                            @endif

                            <!-- Carousel nav -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div></div>



                  <!--/Slider-->
                  @if(count($images) > 0)
                  <div class="col-sm-5" id="slider-thumbs">
                    <!-- Bottom switcher of slider -->
                    <ul class="hide-bullets">
                      <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-0">
                          <img src="{{ URL::to('/') }}/storage/{{ $products->image_path }}">
                        </a>
                      </li>

                      

                      @foreach($images as $key=>$image)



                      <li class="col-sm-4">
                        <a class="thumbnail" id="carousel-selector-{{ $key+1 }}">
                          <img src="{{ URL::to('/') }}/storage/{{ $image->image_path }}">
                        </a>
                      </li>



                      @endforeach

                      
                    </ul>
                  </div>

                  @endif
                </div>

              </div>


            </div>
            <hr>
            <div class="row">
              <div class="col-xs-6"><div style="padding-left: 0px; padding-right: 0px ">
               <div class="panel panel-info">
                 <div class="panel-heading">
                   <h3 class="panel-title">Product Details</h3>
                 </div>
                 <div class="panel-body">
                  <div style="padding-left: 10px ">
                    <p><b>Product Tile:</b></p><p> {{ $products->product_name }}<hr></p>
                    <p><b>Price:</b> <span style="color: red"> {{ number_format($products->price)}} TSH</span></p><hr>
                    <p><b>Product Description:</b>
                      <blockquote>

                        <pre style="white-space: pre-line">
                         {{ $products->description}}
                       </pre>

                     </blockquote>
                     <hr>

                     <i><b>Uploaded:</b> <span  style="color: green;">{{ $products->created_at->diffForHumans() }}</span></i>
                     <hr>
                   </div>
                 </div>
               </div>




             </div>
           </div>
           <div class="col-xs-6">
            <div class="panel panel-info" >
              <div class="panel-heading">
                <h3 class="panel-title">Seller Details</h3>
              </div>
              <div class="panel-body">

                <div class="row">

                  <div class=" col-md-10 col-lg-12 "> 
                    <table class="table table-bordered table-striped table-responsive" style="font-weight: bold;">
                      <tbody>
                        <tr>
                          <td>First Name:</td>
                          <td >{{ $user->first_name }}</td>
                        </tr>
                        <tr>
                          <td>Last Name:</td>
                          <td>{{ $user->last_name }}</td>
                        </tr>
                        <tr>
                          <td>College:</td>
                          <td>{{ $college->college_name }}</td>
                        </tr>

                        <tr>                             
                          <td>Block:</td>
                          <td>{{ $user_details->block_no }}</td>
                          <tr>

                            <td>Room:</td>
                            <td>{{ $user_details->room }}</td>
                          </tr>

                          <tr>
                            <td>Email:</td>
                            <td>{{ $user->email }}</td>
                          </tr>
                          <td>Mobile 1:</td>
                          <td>{{ $user_details->mobile1 }}
                            <a href="tel:{{ $user_details->mobile1 }}" class="btn btn-warning pull-right" role="button"><span class="glyphicon glyphicon-earphone"></span> Call</a>
                          </td>

                        </tr>
                      </tr>
                      <td>Mobile 2:</td>
                      <td>{{ $user_details->mobile2 }}
                        <a href="tel:{{ $user_details->mobile2 }}" class="btn btn-warning pull-right" role="button"><span class="glyphicon glyphicon-earphone"></span> Call</a>
                      </td>

                    </tr>

                  </tbody>
                </table>
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


{{-- For smartphone  --}}
<div class="row" style="padding: 6px;">
<div  class="col-sm-12  visible-xs" style="padding-top: 12px;">

  <div class="panel panel-default" >
    <h4 style="padding: 5px;">{{ $products->product_name }}
    <a href="/" class="pull-right">Home</a>
    </h4>

    <hr>
    <div class="panel-body">
      <!--Images with bxslide -->
      <div class="row">
        <div class="col-xs-12" >
          <ul class="bxslider" >
            <li class="img-responsive">
              <img src="{{ URL::to('/') }}/storage/{{ $products->image_path }}" >
            </li>

            @if(count($images) > 0)

            @foreach($images as $image)

            <li class="img-responsive">
              <img src="{{ URL::to('/') }}/storage/{{ $image->image_path }}">
            </li>

            @endforeach

            @endif
          </ul>

        </div>

      </div>

    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Product Details</a></li>
    <li><a data-toggle="tab" href="#menu1">Seller Details</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div style="padding-left: 10px; padding-top: 10px;">
                  <p> {{ $products->product_name }}<hr></p>
                  <p><b>Price:</b> <span style="color: red"> {{ number_format($products->price)}} TSH</span></p><hr>
                  <p><b>Product Description:</b>

                    <pre style="white-space: pre-line">
                     {{ $products->description}}
                   </pre>
                   <hr>

                   <i><b>Uploaded:</b> <span  style="color: green;">{{ $products->created_at->diffForHumans() }}</span></i>
                   <hr>
                 </div>
    </div>

     <div id="menu1" class="tab-pane fade" style="padding-top: 10px;">
      <table class="table table-bordered table-striped table-responsive" style="font-weight: bold;">
                      <tbody>
                        <tr>
                          <td>First Name:</td>
                          <td >{{ $user->first_name }}</td>
                        </tr>
                        <tr>
                          <td>Last Name:</td>
                          <td>{{ $user->last_name }}</td>
                        </tr>
                        <tr>
                          <td>College:</td>
                          <td>{{ $college->college_name }}</td>
                        </tr>

                        <tr>

                          <td>Block:</td>
                          <td>{{ $user_details->block_no }}</td>
                        </tr>

                        <td>Room:</td>
                        <td>{{ $user_details->room }}</td>
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td>{{ $user->email }}</td>
                      </tr>
                      <td>Mobile 1:</td>
                      <td>{{ $user_details->mobile1 }}
                        <a href="tel:{{ $user_details->mobile1 }}" class="btn btn-warning pull-right" role="button"><span class="glyphicon glyphicon-earphone"></span> Call</a>
                      </td>

                    </tr>
                  </tr>
                  <td>Mobile 2:</td>
                  <td>{{ $user_details->mobile2 }}
                    <a href="tel:{{ $user_details->mobile2 }}" class="btn btn-warning pull-right" role="button"><span class="glyphicon glyphicon-earphone"></span> Call</a>
                  </td>

                </tr>

              </tbody>
            </table>
    </div>
  </div>

    </div>
  </div>
</div>
</div>
</div>

@endsection
