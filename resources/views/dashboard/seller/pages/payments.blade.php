@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
            <div class="col-md-10 col-md-offset-1">
            <div class="panel">
                <h3 style="padding: 5px; padding-left:20px">Payments
                        <span class="pull-right" style="margin-right:17px">
                                <a href="/home" class="btn btn-info " role="button">Home</a>
                                </span>
                </h3>
                <hr>
                    <div class="panel-body">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4><u>Payments Instruction</u></h4>
                                <div class="row">
                                    <div class="col-sm-4">
                                    <div class="panel panel-primary">
                                     <div class="panel-heading">Tigo Pesa</div>
                                        <div class="panel-body">
                                               <p> 1. Piga *150*01# </p>
                                                <p>2. Chagua “1” kwa kutuma pesa, na</p>                
                                                <p>3. Chagua “1” kutuma kwa mteja wa Tigo, au “3” kutuma kwa mitandao mingine.</p>
                                                <p>4. Ingiza Namba ya simu ya mpokeaji, ambayo ni <b>0718266302</b></p>
                                                <p>5. Weka Kiasi 
                                                    <p><b>- 1,000 kwa Standared</b></p>
                                                    <p><b>- 2,000 kwa Premium</b></p>
                                                </p>
                                                <p>6. Itunze kumbukumbu number yako utakayoipata kwenye mesegi 
                                                    ya uthibitisho kutoka tigo pesa
                                                </p>
                                        </div>
                                     </div>
                                    </div>

                                    <div class="col-sm-4">
                                       <div class="panel panel-danger" >
                                            <div class="panel-heading" style="background-color:red; color:white">M Pesa</div>
                                            <div class="panel-body">
                                              Mfumo wa M-pesa Bado Haujawa Tayari
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="col-sm-4">
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">Airtel Money</div>
                                        <div class="panel-body">
                                            Mfumo wa Airtel Money Bado Haujawa Tayari
                                        </div>
                                    </div> 
                                    </div>

                                </div>
                                
                                <div>
                                    <h4><u>Get Your Account</u></h4>
                                    <p>
                                        Baada ya kulipa subiri <b>dakika 15</b>. Baada ya hapo ingiza kumbukumbu namba yako hapo
                                        chini kupata akaunti yako
                                    </p>
                                    <div class="col-sm-offset-2 ">
                                    <form action="/pay" method="POST">
                                        {{csrf_field()}}
                                    <div class="form-group col-sm-5">
                                        <label for="token_no">kumbukumbu Namba:</label>
                                        <input type="text" name="token_no" class="form-control" id="token_no" required>
                                        
                                    </div>
                                    <div class="form-group"> 
                                            <div class="col-sm-offset-0 col-sm-10">
                                              <button type="submit" class="btn btn-primary">Send</button>
                                            </div>
                                          </div>
                                    
                                    </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
                
            </div>
    </div>

</div>

@endsection