<!DOCTYPE html>
<html>
<head>
<title></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
		
<!---//End-rate---->

</head>
<body>
<div class="header">

	
			
			<div class="logo">
				<a href="index.php"><img src="../logo.png" style="height:3.2em;float: left;"></a>
				
				<ul class="card" style="float:right;font-size: 1.2em;">

					<li><a href="login.html" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.html" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					
				</ul>	
			</div>
			
		<br/><br/>	<br/><br/>

						
</div>


  <!---->

     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Villa</h3>
		<h4><a href="index.html">Home</a><label>/</label>villa</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="kitchen.html"> <img class="first-slide" src="../images/ba.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="care.html"> <img class="second-slide " src="../images/ba1.jpg" alt="Second slide"></a>
		 
		 
         
        </div>
        <div class="item">
          <a href="hold.html"><img class="third-slide " src="../images/ba2.jpg" alt="Third slide"></a>
	
          
        </div>
      </div>
    
    </div><!-- /.carousel -->
	

	<div class="login" style="background-image: url('');background-size: 66% 100%;">
	
	<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Process</h3>
                      <img src="process.png" style="padding-left:21.6em">
				</div>
				
			</div>
			<br/>
			
	<div class="main-agileits">
				<div class="form-w3agile form1">
					<h5>
The Villa Medici in Fiesole with early terraced hillside landscape by Leon Battista Alberti A villa was originally an ancient Roman upper-class country house. Since its origins in the Roman villa, the idea and function of a villa have evolved considerably. After the fall of the Roman Republic, villas became small farming compounds, which were increasingly fortified in Late Antiquity, sometimes transferred to the Church for reuse as a monastery</h5>
                  
				</div>
				
	</div>
			<br/>	

<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Inclusions :</h3>
					<ul style="list-style-type:square;    padding-left: 100px;">
					  <li>Inclusion 1</li>
					  <li>Inclusion 2</li>
					</ul>
					<br/>
					<h3>Exclusions :</h3>
                      <ul style="list-style-type:square;    padding-left: 100px;">
					  <li>Exclusion 1</li>
					  <li>Exclusion 2</li>
					</ul>
				</div>
				
	</div>
			<br/>	
			<div class="main-agileits">
				<div class="form-w3agile form1">
					<h4><a href="../index.php">Terms and conditions</a></h4>
				</div>
				
			</div>
			<br/>

			 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFLzv_gVi8H2qyEZfUBUiLoyiuoQeYzO4&libraries=places&callback=init"></script>
    <script type="text/javascript">
   function init() {
	var options = {
		types: ['(cities)']
	};
 
	var input = document.getElementById('locationName');
	var autocomplete = new google.maps.places.Autocomplete(input, options);
}
google.maps.event.addDomListener(window, 'load', init);
    </script>
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Complete the following details:</h3>
					<form action="#" method="post">
						<div class="key">
							<i class="fa fa-" aria-hidden="true"></i>
							<input  type="text" value="Location of Plot" id="locationName" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location of Plot';}" required="required">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-" aria-hidden="true"></i>
							<input  type="text" value="Area of Plot" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Area of Plot';}" required="required">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-" aria-hidden="true"></i>
							<input  type="text" value="Number of floors required" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Number of floors required';}" required="required">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-" aria-hidden="true"></i>
							<input  type="text" value="Construction needs to be started in" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Construction needs to be started in';}" required="required">
						<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-" aria-hidden="true"></i>
							<input  type="text" value="Expected Completion duration" name="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expected Completion duration';}" required="required">
						
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>Home Services Pvt Ltd : we are always ready for providing our services to you.</p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="">Servicing</a></li>						 
				<li><a href="">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="">Terms & Conditions</a></li>
				<li><a href="">Faqs</a></li>
				<li><a href="">Contact</a></li>					 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="login.html">Login</a></li>
				<li><a href="register.html">Register</a></li>
				
			</ul>
		</div>
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="index.html">Homie Services Pvt Ltd<span>Egineered Services at Bargained Price</span></a></h2>
				
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
			<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>BN- 81 Balram nagar , Safilguda</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+917702062212</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><a href="mailto:contact@homieservices.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>contact@homieservices.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2018. All Rights Reserved</a></p>
		</div>
	</div>
</div>
<!-- //footer-->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>
				
</body>
</html>