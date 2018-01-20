@extends('welcome')
@section('title','UDOM-PORTAL')
@section('content')
<form method="POST">
	{{ csrf_field() }}
  <div class="hidden-xs" >
    <div class="row ">
      <div class="container" >
        <div class="row">
          <div class="row">

            <div class="col-md-9">
              <h3>
                Electronics
              </h3>
            </div>
          </div>

          <!-- Wrapper for slides -->

          <div class="carousel-inner">
            <div class="item active">
              <div class="row">
                @if(count($electronics) > 0)
                @foreach($electronics as $item)

                <div class="col-sm-3"><a href="/item/{{ $item->id }}">
                  <div class="col-item">
                    <div class="photo">
                      <img src="{{ URL::to('/') }}/storage/{{ $item->image_path }}" class="img-responsive"  alt="a" />
                    </div>

                    <div class="info">
                      <div class="row">
                        <div class="price col-md-6">
                          <h5>
                            {{ str_limit($item->product_name,25) }}</h5>
                            <h5 class="" style="color: black;">
                              <span class="glyphicon glyphicon-map-marker"></span> cive

                              
                              </h5>
                            </div>
                            <div class="rating hidden-sm col-md-6">
                              <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                              </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                              </i><i class="fa fa-star"></i>
                            </div>
                          </div>
                          <div class="separator clear-left">
                            <p class="btn-add">
                              <a href="http://www.jquery2dotnet.com" class="hidden-sm">{{ number_format($item->price) }} TSH</a></p>
                              <p class="btn-details">
                                <i class="fa fa-list"></i><a href="/item/{{ $item->id }}" class="hidden-sm">More details</a></p>
                              </div>
                              <div class="clearfix">
                              </div>
                            </div>
                          </div></a>
                        </div>

                        @endforeach

                        @else

                        <div class="alert alert-info">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <strong>No any product uploaded yet..!</strong>
                          Be the first to add your product here <a href="">Add</a>
                        </div>

                        @endif
                      </div>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="row">

                    <div class="col-md-9">
                      <h3>
                        Fashion
                      </h3>
                    </div>
                  </div>

                  <!-- Wrapper for slides -->

                  <div class="carousel-inner">
                    <div class="item active">
                      <div class="row">
                        @if(count($fashion) > 0)
                        @foreach($fashion as $item)

                        <div class="col-sm-3"><a href="/{$item->id}">
                          <div class="col-item">
                            <div class="photo">
                              <img src="{{ URL::to('/') }}/storage/{{ $item->image_path }}" class="img-responsive"  alt="a" />
                            </div>
                            <div class="info">
                              <div class="row">
                                <div class="price col-md-6">
                                  <h5>
                                    {{ str_limit($item->product_name,25) }}</h5>
                                    <h5 class="price-text-color">
                                      {{ $item->price }} TSH</h5>
                                    </div>
                                    <div class="rating hidden-sm col-md-6">
                                      <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                      </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                      </i><i class="fa fa-star"></i>
                                    </div>
                                  </div>
                                  <div class="separator clear-left">
                                    <p class="btn-add">
                                      <p class="btn-add">
                              <a href="/item/{{ $item->id }}" class="hidden-sm">{{ number_format($item->price) }} TSH</a></p>
                                      <p class="btn-details">
                                        <i class="fa fa-list"></i><a href="/item/{{ $item->id }}" class="hidden-sm">More details</a></p>
                                      </div>
                                      <div class="clearfix">
                                      </div>
                                    </div>
                                  </div></a>
                                </div>

                                @endforeach

                                @else

                                <div class="alert alert-info">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                  <strong>No any product uploaded yet..!</strong>
                                  Be the first to add your product here <a href="">Add</a>
                                </div>

                                @endif
                              </div>
                            </div>
                          </div>
                        </div>
                        <h3>Other Categories</h3>
                      </div>

                    </div>
                  </div>

                </div>
              </div>
              <div class="container hidden-xs col-sm-offset-2">

                <div class="row">

                  <div class="col-sm-3">
                    <form action="/others/3" method="GET" class="form-horizontal" role="form">

                      <div class="form-group ">
                        <div class="col-sm-10 col-sm-offset-2">
                          <button type="submit" class="btn btn-default" style="min-width:250px;">Motors</button>
                        </div>
                      </div>
                    </form>

                  </div>
                  <div class="col-sm-3">
                    <form action="/others/4" method="GET" class="form-horizontal" role="form">

                      <div class="form-group ">
                        <div class="col-sm-10 col-sm-offset-2">
                          <button type="submit" class="btn btn-default" style="min-width:250px;">Home</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-sm-3">
                    <form action="/others/5" method="GET" class="form-horizontal" role="form">

                      <div class="form-group ">
                        <div class="col-sm-10 col-sm-offset-2">
                          <button type="submit" class="btn btn-default" style="min-width:250px;">Sports</button>
                        </div>
                      </div>
                    </form>
                  </div>

                </div>

              </form>
            </div>

          </form>



          <!-- For smartphone -->

          <div class="visible-xs " style="padding: 7px;" >
            <div class="row">
              <h4 style="padding-left: 13px;">Electronics</h4>
            </div>
            <div class="row " style="padding-left: 7px;">
              @if(count($electronics_phone) > 0)
              @foreach($electronics_phone as $item_for_phone)
              <div class="col-xs-4 no-padding"><a href="/item/{{ $item_for_phone->id }}">
                <div class="thumbnail">

                  <img src="{{ URL::to('/') }}/storage/{{ $item_for_phone->image_path }}" alt="" style="width:100%; height: 90px;">
                  <div class="caption">
                    <p>{{ str_limit($item_for_phone->product_name,25) }}</p>
                  </div>

                </div></a>
              </div>
              @endforeach
              @else
              <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>No any product uploaded yet..!</strong>
                Be the first to add your product here <a href="">Add</a>
              </div>

              @endif

            </div>

            <!-- Fashion -->
            <div class="row">
              <h4 style="padding: 13px;">Fashion</h4>
            </div>
            <div class="row " style="padding-left: 7px;">
              @if(count($fashion_phone) > 0)
              @foreach($fashion_phone as $item_for_phone)
              <div class="col-xs-4 no-padding"><a href="/item/{{ $item_for_phone->id }}">
                <div class="thumbnail">

                  <img src="{{ URL::to('/') }}/storage/{{ $item_for_phone->image_path }}" alt="" style="width:100%; height: 90px;">
                  <div class="caption">
                    <p>{{ str_limit($item_for_phone->product_name,25) }}</p>
                  </div>

                </div></a>
              </div>
              @endforeach
              @else
              <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>No any product uploaded yet..!</strong>
                Be the first to add your product here <a href="">Add</a>
              </div>

              @endif

            </div>

            <div class="row">
              <h4 style="padding: 13px;">Other Categories</h4>
            </div>

            <div class="row">
            <div class="col-xs-4">
                    <form action="/others/3" method="GET" class="form-horizontal" role="form">

                      <div class="form-group ">
                        <div class="col-sm-12 ">
                          <button type="submit" class="btn btn-default" style="min-width: 90px;">Motors</button>
                        </div>
                      </div>
                    </form>

                  </div>
                  <div class="col-xs-4">
                    <form action="/others/4" method="GET" class="form-horizontal" role="form">

                      <div class="form-group ">
                        <div class="col-sm-12 ">
                          <button type="submit" class="btn btn-default" style="min-width: 90px;">Home</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-xs-4">
                    <form action="/others/5" method="GET" class="form-horizontal" role="form">

                      <div class="form-group ">
                        <div class="col-sm-12 " >
                          <button type="submit" class="btn btn-default" style="min-width: 90px;">Sports</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
          </div>

          @endsection


