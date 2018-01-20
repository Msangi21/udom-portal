@extends('welcome')
@section('title','Buy & Sell with UDOM-PORTAL')
@section('content')
<style type="text/css">
.span4 img {
	margin-right: 10px;
}

img{
	width: 25%;
	height: 120%;

}
.span4 .img-left {
	float: left;
}
.span4 .img-right {
	float: right;
}
</style>
<div class="container-fluid">
	<div class=" hidden-xs">
	<div class="row" style="padding-left: 12px;"> 
		<h4>Categories</h4>
	</div>
	<div class="col-sm-2">
		<ul >
			<li><a href="#">Electrical</a>
				<ul>
					<li><a href="link/1">Cell Phone & Accessories</a></li>
					<li><a href="link/2">Cameras</a></li>
					<li><a href="link/3">Tablets</a></li>
					<li><a href="link/4">Computers</a></li>
				</ul>
			</li>

			<li><a href="#">Fashion</a>
				<ul >
					<li><a href="link/5">Men's</a></li>
					<li><a href="link/6">Women's</a></li>
					<li><a href="link/7">Kid's</a></li>
				</ul>
			</li>

			<li><a href="#">Motor's</a>
				<ul>
					<li><a href="link/8">Cars</a></li>
					<li><a href="link/9">Motorcycles</a></li>
					<li><a href="link/10">Parts & Accessories</a></li>
				</ul>
			</li>

			<li><a href="#">Home</a>
				<ul>
					<li><a href="link/11">Furniture</a></li>
					<li><a href="link/12">Kitchen Tools</a></li>
				</ul>
			</li>

			<li><a href="#">Sports</a>
				<ul >
					<li><a href="link/13">Exercise & Fitness</a></li>
					<li><a href="link/14">Tools</a></li>
				</ul>
			</li>

		</ul>
	</div>
	<div class="panel panel-default col-sm-9 pull-left">
		<div class="panel-body">
			<div>
					<p  style="font-size: 15px;"><b>{{ $count }}</b> results 

						<a href="/" class="btn btn-info pull-right">Home</a>

					</p>
				</div>
			<hr>
			<div class="block">
				@if(count($select) > 0)

				@foreach($select as $key => $item)
				<div class="row">

					<div class="col-sm-12" style="padding-left: 12px;"><a href="/item/{{ $item->id }}">
						<div class="span4">
						<img class="img-left" src="{{ URL::to('/') }}/storage/{{ $item->image_path }}" />
						<div class="content-heading">
							<h4 ><a href="/item/{{ $item->id }}">{{ $item->product_name }} &nbsp </a></h4>
							<h5><p class="pull-right text-primary"><span class="glyphicon glyphicon-time"></span> {{ $item->created_at->diffForHumans() }}</p><h5>

						</div>
						<h5 style="color: #968c03;"><b>TSH {{ number_format($item->price) }}</b>

						</h5>
						<span style="font-size: 12px;">Get it from us</span>
						<p><span class="glyphicon glyphicon-map-marker"></span> Map-marker icon:</p> 
						
					</div>
					</div></a>

				</div><hr>
				@endforeach


				@else
				
				<h4></h4>
				<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>No Ad's added</strong> 
				</div>
					<hr>
				@endif
			</div>
		</div>
	</div>
	<center>{{ $select->links() }}</center>
</div> 


		<!--For smartphone -->
<div class="visible-xs" >
		<div class="row"  style="padding: 6px; padding-top: 16px; ">
			<div class="panel panel-default">
				<div class="panel-body">
					<div>
					<p  style="font-size: 15px;"><b>{{ $count }}</b> results for <b>{{ str_limit($req,15) }}</b><a href="/" class="pull-right">Home</a></p>

				</div>
				<hr>

				@if(count($select) > 0)
				@foreach($select as $phone_item)
					<div class="col-xs-11">
						<a href="/item/{{ $phone_item->id }}">
							<div class="thumbnail">
							<img class="pull-left img-responsive" src="{{ URL::to('/') }}/storage/{{ $phone_item->image_path }}" style="width: 100%"/>
							<hr>
							<div class="caption" style="padding-left: 10px;">
								<h4>{{ $phone_item->product_name }}</h4>
								<p>TSH {{ number_format($phone_item->price) }}</p>
							</div>
							</a>
							</div>
						
					  
					  <hr>
					</div>

				@endforeach
				@else

				<h4></h4>
					<div class="alert alert-info">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>No Ad's added</strong> 
				</div><hr>

				@endif
				</div>
			</div>
			<center>{{ $select->links() }}</center>
		</div>
	</div>
	
</div>

	

	@endsection