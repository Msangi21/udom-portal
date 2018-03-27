<style type="text/css">
    .footer-bs {
    background-color: #3c3d41;
    padding: 60px 40px;
    color: rgba(255,255,255,1.00);
    margin-bottom: 20px;
    border-bottom-right-radius: 6px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 6px;
}
 footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
.footer-bs .footer-brand, .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { padding:10px 25px; }
.footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-color: transparent; }
.footer-bs .footer-brand h2 { margin:0px 0px 10px; }
.footer-bs .footer-brand p { font-size:12px; color:rgba(255,255,255,0.70); }

.footer-bs .footer-nav ul.pages { list-style:none; padding:0px; }
.footer-bs .footer-nav ul.pages li { padding:5px 0px;}
.footer-bs .footer-nav ul.pages a { color:rgba(255,255,255,1.00); font-weight:bold; text-transform:uppercase; }
.footer-bs .footer-nav ul.pages a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }
.footer-bs .footer-nav h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom:10px;
}

.footer-bs .footer-nav ul.list { list-style:none; padding:0px; }
.footer-bs .footer-nav ul.list li { padding:5px 0px;}
.footer-bs .footer-nav ul.list a { color:rgba(255,255,255,0.80); }
.footer-bs .footer-nav ul.list a:hover { color:rgba(255,255,255,0.60); text-decoration:none; }

.footer-bs .footer-social ul { list-style:none; padding:0px; }
.footer-bs .footer-social h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
}
.footer-bs .footer-social li { padding:5px 4px;}
.footer-bs .footer-social a { color:rgba(255,255,255,1.00);}
.footer-bs .footer-social a:hover { color:rgba(255,255,255,0.80); text-decoration:none; }

.footer-bs .footer-ns h4 {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom:10px;
}
.footer-bs .footer-ns p { font-size:12px; color:rgba(255,255,255,0.70); }

@media (min-width: 768px) {
    .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { border-left:solid 1px rgba(255,255,255,0.10); }
}
</style>

<div class="hidden-xs">
    <section style="height:80px;"></section>
	<div class="row" style="text-align:center;">
		
	</div>
    <!----------- Footer ------------>
    <footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
            	<h3 style="color: #ffbf00">UDOM PORTAL</h3>
                <p>Is a web application which allow its users to advertise
                    their products within the University of Dodoma (UDOM), It simplifies the products
                    advertisement by reducing effort used by user to announse his/her products in many groups
                    of <b>Social network</b> where some people will not see the notification.</p>
                <p>© {{date('Y')}} NATMATECH, All rights reserved</p>
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<h4>Menu —</h4>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="/homestools/4">Home</a></li>
                        <li><a href="/electrical/1">Electronics</a></li>
                        <li><a href="/fashion/2">Fashion</a></li>
                        <li><a href="/motors/3">Motors</a></li>
                        <li><a href="/sports/5">Sports</a></li>
                    </ul>
                </div>
            	<div class="col-md-6">
                    <ul class="list">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#">Contacts</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-2 footer-social animated fadeInDown">
            	<h4>Follow Us</h4>
            	<ul>
                	<li><a href="#">Facebook</a></li>
                	<li><a href="#">Twitter</a></li>
                	<li><a href="#">Instagram</a></li>
                </ul>
            </div>
        	<div class="col-md-3 footer-ns animated fadeInRight">
            	<h4>Newsletter</h4>
                <p>For purpose of get our update information please send to us your email</p>
                <p>
                    <div class="input-group">
                      <input type="email" class="form-control" placeholder="Enter email...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-envelope"></span></button>
                      </span>
                    </div><!-- /input-group -->
                 </p>
            </div>
        </div>
    </footer>
    <section style="text-align:center; margin:10px auto;"><p>Designed by <a href="http://natmatech.co.tz">Natmatch</a></p></section>

</div>

<footer class="container  visible-xs">
  <center>UDOM POTAL @ {{ date('Y') }}</center>

  <p><center>Designed by <a href="http://matech.co.tz">Natmatch</a></center></p>
</footer>