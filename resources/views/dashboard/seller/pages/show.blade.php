@extends('layouts.app')

@section('content')

<div class="container" >
    <div class="row">

        <div class="col-md-10 col-md-offset-1 hidden-xs">

            <div class="panel">

                <h3 style="padding: 5px;">{{ $products->product_name }}
                        <span class="pull-right" style="margin-right:17px">
                                <a href="/home" class="btn btn-info " role="button">Home</a>
                             </span>
                </h3>
                

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
                                    <div class="col-sm-12" id="carousel-bounding-box">
                                        <div class="carousel slide" id="myCarousel">
                                            <!-- Carousel items -->
                                            <div class="carousel-inner">
                                                <div class="active item item1" data-slide-number="0">
                                                    <div>
                                                    <img src="{{ Request::getSchemeAndHttpHost() }}/storage/{{ $products->image_path }}"></div>
                                                </div>
                                                    @if(count($images) > 0)

                                                    @foreach($images as $key=>$image)

                                                    <div class="item item1" data-slide-number="{{ $key }}">
                                                        <div>
                                                        <img src="{{ Request::getSchemeAndHttpHost() }}/storage/{{ $image->image_path }}"></div>
                                                         </div>
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

                                    <div class="col-sm-5" id="slider-thumbs">
                                        <!-- Bottom switcher of slider -->
                                        <ul class="hide-bullets">
                                            <li class="col-sm-4">
                                                <a class="thumbnail" id="carousel-selector-0">
                                                    <img src="{{ Request::getSchemeAndHttpHost() }}/storage/{{ $products->image_path }}">
                                                </a>
                                            </li>

                                            @if(count($images) > 0)

                                            @foreach($images as $key=>$image)



                                            <li class="col-sm-4">
                                                <a class="thumbnail" id="carousel-selector-{{ $key+1 }}">
                                                    <img src="{{ Request::getSchemeAndHttpHost() }}/storage/{{ $image->image_path }}">
                                                </a>
                                            </li>



                                            @endforeach

                                            @endif
                                        </ul>
                                    </div>


                                </div>

                            </div>


                        </div>
                         <hr>
                        <div class="row">
                            <div class="col-xs-12"><div style="padding-left: 20px; padding-right: 20px ">
                             <div class="panel panel-info">
                                 <div class="panel-heading">
                                     <h3 class="panel-title">Full Description</h3>
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
                   </div>
                   </div>
                   
               </div>
                </div>
           
        </div>
    

               {{-- For smartphone  --}}
                   <div  class="col-md-10 col-md-offset-1 visible-xs">

                    <div class="panel panel-default">
                        <h3 style="padding: 5px;">My Ads</h3>
                        <hr>
                        <div class="panel-body">
                            <!--Images with bxslide -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <ul class="bxslider">
                                        <li class="img-responsive">
                                            <img src="{{ Request::getSchemeAndHttpHost() }}/storage/{{ $products->image_path }}">
                                        </li>

                                        @if(count($images) > 0)

                                        @foreach($images as $image)

                                        <li class="img-responsive">
                                            <img src="{{ Request::getSchemeAndHttpHost() }}/storage/{{ $image->image_path }}">
                                        </li>

                                        @endforeach

                                        @endif
                                    </ul>
                                        
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="panel panel-default">
                                      <div class="panel-heading">
                                        <h3 class="panel-title">Description

                                            <a href="/home" class="pull-right"><span class="text-primary">Back</span></a>

                                        </h3>
                                      </div>
                                      <div class="panel-body" style="padding-top: 10px">
                                        <div style="padding-left: 10px ">
                                        <p><b>Product Tile:</b></p><p> {{ $products->product_name }}<hr></p>
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
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                       
                   </div>
@endsection


