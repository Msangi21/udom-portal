@extends('layouts.app')

@section('content')
<style type="text/css">
#formdiv {
  text-align: center;
}
#file {
  color: green;
  padding: 5px;
  border: 1px dashed #123456;
  background-color: #f9ffe5;
}
#img {
  width: 17px;
  border: none;
  height: 17px;
  margin-left: -20px;
  margin-bottom: 191px;
}
.upload {
  width: 100%;
  height: 30px;
}
.previewBox {
  text-align: center;
  position: relative;
  width: 250px;
  height: 250px;
  margin-right: 10px;
  margin-bottom: 20px;
  float: left;
}
.previewBox img {
  height: 150px;
  width: 150px;
  padding: 5px;
  border: 1px solid rgb(232, 222, 189);
}
.delete {
  color: red;
  font-weight: bold;
  position: absolute;
  top: 0;
  cursor: pointer;
  width: 20px;
  height:  20px;
  border-radius: 50%;
  background: #ccc;
}

&lt;style type="text/css">
.notes
{
  background-image: -webkit-linear-gradient(left, white 10px, transparent 10px), -webkit-linear-gradient(right, white 10px, transparent 10px), -webkit-linear-gradient(white 30px, #ccc 30px, #ccc 31px, white 31px);
  background-image: -moz-linear-gradient(left, white 10px, transparent 10px), -moz-linear-gradient(right, white 10px, transparent 10px), -moz-linear-gradient(white 30px, #ccc 30px, #ccc 31px, white 31px);
  background-image: -ms-linear-gradient(left, white 10px, transparent 10px), -ms-linear-gradient(right, white 10px, transparent 10px), -ms-linear-gradient(white 30px, #ccc 30px, #ccc 31px, white 31px);
  background-image: -o-linear-gradient(left, white 10px, transparent 10px), -o-linear-gradient(right, white 10px, transparent 10px), -o-linear-gradient(white 30px, #ccc 30px, #ccc 31px, white 31px);
  background-image: linear-gradient(left, white 10px, transparent 10px), linear-gradient(right, white 10px, transparent 10px), linear-gradient(white 30px, #ccc 30px, #ccc 31px, white 31px);
  background-size: 100% 100%, 100% 100%, 100% 31px;
  border: 1px solid #ccc;
  border-radius: 8px;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  line-height: 31px;
  font-family: Arial, Helvetica, Sans-serif;
  padding: 8px;
  width:300px;
  height:500px;
}
.notes:focus
{
  outline: none;
}
body
{
  background-color: #eee;
}
&lt;/style>
</style>

<div class="container">

 <div class="row">

  <div class="col-md-10 col-md-offset-1">

    <div class="panel ">
      <div id="collapse2" class="panel-collapse collapse in">
       <h3 style="padding: 5px;">Posting Area</h3>
       <hr>
       <div class="panel-body">
         @if(Auth::User()->status == 1)

         <div class="col-sm-6 col-sm-offset-1" style="padding: 15px;">
          @if($errors->any())
          <div class="alert alert-warning">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>
              <ul>
                  @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </strong>
          </div>
          @endif
          <form id="product" action="/product" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div id="message"></div>
             
            <div class="form-group">
              <label for="name">Main Product Images:</label>

              <input type="file" class="form-control" id="main_image" name="main_image" onchange="preview_main_images();"  required >

            </div>
            <div class="row" id="image_main_preview"></div>
            <hr>

            <div class="form-group">
              <label for="name">More Product Images (Option):</label>

              <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();"  multiple >

            </div>
            <div class="row" id="image_preview"></div>
            <hr>


            <div class="form-group">
              <label for="product_name">Product Tile:</label>
              <input type="text" name="product_name" class="form-control" id="product_name" maxlength="50" placeholder="Eg. Nauza Computer Aina Ya Hp" required>
            </div>

            <div class="form-group">
              <label for="price">Price</label>
              <div class="input-group">
                <span class="input-group-addon">Tsh</span>
                <input type="number" name="price" id="price" class="form-control"  placeholder="Price" required/>
              </div>
            </div>

            <div class="form-group">
              <label for="product_category">Product Category:</label>
              <select name="product_category" id="product_category" class="form-control" required="required">
                <option>--categories--</option>
                @foreach($category as $categories)
                <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="email">Product Sub Category:</label>
              <select name="product_sub_category" id="product_sub_category" class="form-control" required="required">
                <option value="">--Select Category--</option>
              </select>
            </div>

            <div class="form-group">
              <label for="email">Product Description:<span style="color: red;"><p>(Note: Please don't add your contacts info eg.phone_no. or location)</p></span></label>
              <textarea name="description" id="description" class="form-control" rows="4" required="required" placeholder=""></textarea>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        @else
        <center><h4>Please Complete Your status first! <a href="/address/{{ Auth::User()->id }}/edit">Status</a></h4></center>
        @endif
      </div>

    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection
