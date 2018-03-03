@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel">

                <h3 style="padding: 5px;">Edit Product Details
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

                    <div class="row">
                        <div class="col-md-4">
                            <div class="thumbnail">
                          <a href="{{ URL::to('/') }}/storage/{{ $product->image_path }}">
                            <img src="{{ URL::to('/') }}/storage/{{ $product->image_path }}" alt="{{ $product->product_name }}" class="img-rounde" style="width:100%">
                            
                        </a>
                    </div>
                </div>
                <div class="col-sm-8">
                   <form action="/home/{{ $product->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <input type="hidden" name="main_id" value="{{ $product->main_id }}">
                    <input type="hidden" name="sub_category_id" value="{{ $product->sub_category_id }}">
                    <input type="hidden" name="user_id" value="{{ $product->user_id }}">
                    <div class="form-group">
                      <label for="email">Product Tile:</label>
                      <input type="text" class="form-control" id="product_name"  name="product_name"
                      value="{{ isset($product->product_name) ? $product->product_name : old('name') }}">
                  </div>
                  <div class="form-group">
                      <label for="pwd">Price:</label>
                      <div class="input-group">
                        <span class="input-group-addon">Tsh</span>
                        <input type="number" name="price" id="price" class="form-control"  placeholder="Price" value="{{ isset($product->price) ? $product->price : old('name') }}" required>

                    </div>
                    <div class="form-group">
                       <label for="email">Product Description:<span style="color: red;"><p>(Note: Please dont add your contacts info eg.phone_no. or location)</p></span></label>
                       <textarea name="description" id="description" class="form-control" rows="4" required="required" placeholder="">{{ isset($product->description) ? $product->description : old('name') }}</textarea>
                   </div>
                   <button type="submit" class="btn btn-primary">Submit</button>
               </form>
           </div>
       </div>
       <hr>


   </div>
</div>
</div>
</div>
</div>
</div>
@endsection
