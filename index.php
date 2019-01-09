<?php require_once("assets/scripts/sessions.php"); ?>
<!doctype html>
<html>
<head>
<title>Body By Yama</title>
<meta charset="utf-8" >
<meta name="description" content="Body By Yama - Personal Trainer">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="assets/css/styles.css" media="all" rel="stylesheet" type="text/css"/>
<link href="assets/css/uikit.css" media="all" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,900" rel="stylesheet">
<script src="assets/js/uikit.min.js"></script>
<script src="assets/js/uikit-icons.min.js"></script>
</head>

<!-- Purple Hex: #5a3795 -->
<style>

/*
	@font-face {
		font-family: 'Univers';
		src: url(/assets/fonts/Univers/Univers.otf) format("opentype");
		}
*/

	h1 {
		font-size: 56px;
		font-weight: 900;
		color: #5a3795;
		padding: 0px 0px 0px 20px; 
		margin: 0px;
		font-family: 'Roboto', sans-serif;
	}
	
	h2,h3,h4,h5 {
		font-size: 32px;
		font-weight: 900;
		color: #5a3795;
		font-family: 'Roboto', sans-serif;
	}
	
	p {
		font-weight: 400;
		font-size: 20px;
		font-family: 'Roboto', sans-serif;
		
	}

	a {
		color: #5a3795;
		font-family: 'Roboto', sans-serif;
	}

	a:hover {
		color: #5a3795;
	}

	a:visited {
		color: #5a3795;
	}
	
	a:hover.hoverFx {
		color: black;
	}
	
	.auto-resizable-iframe {
		max-width: 640px;		
		max-height: 360px;
		margin: 0px auto;
	}

	.auto-resizable-iframe > div {
	  position: relative;
	  padding-bottom: 56%;
	  height: 0px;
	}

	.auto-resizable-iframe iframe {
	  position: absolute;
	  top: 0px;
	  left: 0px;
	  width: 100%;
	  height: 100%;
	}
	
	.insideShadowTopBottom {
		-moz-box-shadow:    
			inset 0px 11px 40px -10px black,
			inset 0px -11px 40px -10px black;
		-webkit-box-shadow: 
			inset 0px 11px 40px -10px black,
			inset 0px -11px 40px -10px black;
		box-shadow:         
			inset 0px 11px 40px -10px black,
			inset 0px -11px 40px -10px black;
	}

	.insideShadowTop {
		-moz-box-shadow:    
			inset 0px 11px 40px -10px black;
		-webkit-box-shadow: 
			inset 0px 11px 40px -10px black;
		box-shadow:         
			inset 0px 11px 40px -10px black;
	}

	.removeMarginPadding {
		padding: 0px; 
		margin: 0px;
	}
	
	.blog-grid {
			padding-left: 25%
		}
	
	.navLink {
		color: #5a3795; 
		font-size: 20px; 
		height: 35px; 
		padding: 0px 15px 0px;
	}
	
	/* Smaller screens */
	@media screen and (max-width:720px) {
		
	}
</style>
	
<header>
	<div>
		<nav class="uk-navbar-transparent uk-navbar uk-navbar-container uk-visible@m" style="padding-top: 1%">
			<div class="uk-navbar-left" style="padding-left: 10%;">
					<a class="uk-navbar-item uk-logo" href="/">
							<img src="assets/images/mark-04.svg" alt="Body by Yama logo" >
							<svg width="300" height="150"></svg>
					</a>
			</div>
			<div class="uk-navbar-right" style="padding-right: 10%;">
					<ul  class="uk-navbar-nav">
							<li><a style="color: #5a3795; font-size: 16px; height: 35px; padding: 0px 24px 0px;" href="#me">ME</a></li>
							<li><a style="color: #5a3795; font-size: 16px; height: 35px; padding: 0px 24px 0px;" href="#plans">PLANS</a></li>
							<li><a style="color: #5a3795; font-size: 16px; height: 35px; padding: 0px 24px 0px;" href="#reviews">REVIEWS</a></li>
							<li><a style="color: #5a3795; font-size: 16px; height: 35px; padding: 0px 24px 0px;" href="#blog">BLOG</a></li>
							<li><a style="color: #5a3795; font-size: 16px; height: 35px; padding: 0px 24px 0px;" href="#contact" uk-toggle>CONTACT</a></li>
					</ul>
			</div>
		</nav>
	</div>


	<!-- Displayed only on small screens -->
	<div class="uk-container">
		<nav class="uk-navbar uk-navbar-container uk-margin uk-hidden@m" style="background: #FFFFFF; padding-top:1.5%; padding-bottom:1.5%;">
			<div class="uk-navbar-left">
				<div class="uk-navbar-item" style="padding-left: 0.5%; padding-right: 0.5%; max-width: 300px;">
					<a class="uk-navbar-item" href="/">
						<img class="uk-logo uk-responsive-height uk-responsive-width" src="assets/images/mark-04.png" alt="Body by Yama logo">
						
					</a>
				</div>
			</div>
			<div class="uk-navbar-right">
				<div>
					<a class="uk-navbar-toggle uk-navbar-toggle-icon uk-icon" href="#" uk-navbar-toggle-icon="">
						<svg width="10" height="20" viewBox="0 0 0 0" xmlns="http://www.w3.org/2000/svg" ratio="1">
							<rect y="9" width="10" height="2"></rect>
							<rect y="3" width="10" height="2"></rect>
							<rect y="15" width="10" height="2"></rect>
						</svg>
					</a>
					<div class="uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav; flip: x">
						<a href="#me"></span>ME</a><br>
						<a href="#plans">PLANS</a><br>
						<a href="#reviews">REVIEWS</a><br>
						<a href="#blog">BLOG</a><br>
						<a href="#contact" uk-toggle>CONTACT</a>
					</div>
				</div>
			</div>
		</nav>
	</div>

</header>
<body>
<!-- Body -->
	
<!-- Alert -->
<div class="uk-container-small uk-width-1-3@m uk-position-top-center uk-position-medium uk-position-z-index">
	<?php echo message(); ?>
</div>	
	
<!-- ME section -->
<div class="uk-background-cover" uk-parallax="bgy: 60; bgx: -90;"  style="background-image: url(assets/images/yamato_bg-2560px.png)">
<div class="uk-container uk-padding-large">
	<a name="me"></a>
	<div class="uk-width-1-2@m uk-align-center">
		<h1>Allow Me to <br>Introduce Myself<br></h1>
		<img src="assets/images/underscore-05.svg" width="50px" height="15px">
	</div>
	<div class="auto-resizable-iframe" style="box-shadow: 10px 10px 25px #414042;">
	  <div>
		<iframe
		 frameborder="0"
		 allowfullscreen=""
		 src="https://www.youtube.com/embed/qWy_aOlB45Y">
		 </iframe>
	  </div>
	</div>

	
	<div class="uk-align-center uk-padding uk-visible@m" style="width:45%;">
		<p class="uk-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at hendrerit erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed at mattis nulla. Vivamus eu consectetur turpis, eget lacinia risus. Sed erat nibh, consectetur ac varius ac, pulvinar eget nisi. Donec dictum, ligula vitae sagittis mollis, mauris risus tristique ex, vitae feugiat lectus justo in odio. Aliquam a faucibus ligula. Fusce viverra arcu est, eu euismod massa commodo eget. Nunc in rhoncus odio. Duis dui lectus, pretium id tellus eu, posuere porta velit. </p>
	</div>
	<!-- Small Devices only -->
	<div class="uk-align-center uk-padding uk-hidden@m">
		<p class="uk-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at hendrerit erat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed at mattis nulla. Vivamus eu consectetur turpis, eget lacinia risus. Sed erat nibh, consectetur ac varius ac, pulvinar eget nisi. Donec dictum, ligula vitae sagittis mollis, mauris risus tristique ex, vitae feugiat lectus justo in odio. Aliquam a faucibus ligula. Fusce viverra arcu est, eu euismod massa commodo eget. Nunc in rhoncus odio. Duis dui lectus, pretium id tellus eu, posuere porta velit. </p>
	</div>
</div>
</div>

<!-- PLANS section -->
<div class="insideShadowTopBottom" style="background-image:url(assets/images/textured_bg.jpg); ">
	<a name="plans"></a>
	<div class="uk-container uk-padding-large">
		<div class="uk-width-1-2@m uk-align-center">
			<h1 style="padding-left:5%; color: white;">Find a Plan For You<br></h1>
			<img src="assets/images/underscore-05.svg" width="50px" height="15px">
		</div>
		<div class="uk-visible@m">
			<div style="margin: 0 auto; width: 80%;" class="uk-grid-match uk-child-width-1-3@m uk-padding-remove" uk-grid uk-scrollspy="cls: uk-animation-scale-up; target: > div > img; repeat: true">
				<div class="uk-padding-small">
					<img class="uk-align-center" src="https://placeimg.com/200/200/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
				<div class="uk-padding-small">
					<img class="uk-align-center" src="https://placeimg.com/300/300/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
				<div class="uk-padding-small">
					<img class="uk-align-center" src="https://placeimg.com/400/400/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
			</div>

			<div style="margin: 0 auto; width: 80%;" class="uk-child-width-1-3@m uk-padding-small" uk-grid uk-scrollspy="cls: uk-animation-slide-bottom; target: > div > p; repeat: true">
				<div class="uk-padding-small">
					<h3 style="color:white;">Home Workout</h3>
					<p style="color:white;">This 30-day home routine doesn’t require any equipment, and doesn’t sacrifice effectiveness.
					For an entire month, you will perform a range of upper, lower, and full body circuit-style exercises, making this the perfect plan for a busy schedule.</p>
				</div>
				<div class="uk-padding-small">
					<h3 style="color:white;">Booty Builder</h3>
					<p style="color:white;">You’ll need access to a gym for this routine. For eight weeks, I’ll give you everything you need to build your butt from every angle. Each week will contain three days of glute workouts, and exercises will change every week, keeping your booty fully activated. I suggest pairing this plan with a weekly upper body routine.</p>
				</div>
				<div class="uk-padding-small">
					<h3 style="color:white;">Full Body</h3>
					<p style="color:white;">This plan is a full service strategy to building a better you. During this eight week routine, you will receive the benefits of the eight week booty builder, plus an added two upper body days and HIIT circuits per week. Everything you need to make wholesome improvements to every inch of your body will be found in this plan.</p>
				</div>
			</div>
		</div>
		<div class="uk-hidden@m">
			<div style="margin: 0 auto; width: 80%;" class="uk-grid-match uk-padding-remove" uk-grid>
				<div>
					<img class="uk-align-center" src="https://placeimg.com/200/200/nature" alt="" style="max-width: 200px; max-height: 200px;">
				</div>
				<div>
					<h3 style="color:white;">Home Workout</h3>
					<p style="color:white;">This 30-day home routine doesn’t require any equipment, and doesn’t sacrifice effectiveness.
					For an entire month, you will perform a range of upper, lower, and full body circuit-style exercises, making this the perfect plan for a busy schedule.</p>
				</div>
				<div>
					<img class="uk-align-center" src="https://placeimg.com/300/300/nature" alt="" style="max-width: 200px; max-height: 200px;">
				</div>
				<div>
					<h3 style="color:white;">Booty Builder</h3>
					<p style="color:white;">What is the benefit of growing under glass? Year-round production. 
					By taking advantage of greenhouse farming, Glass House Farms is able to produce Bibb lettuce throughout the winter with controlled temperature and relative humidity. 
					Growing under glass as opposed to the alternative material, polyurethane, allows a higher percentage of light transparency.</p>
				</div>
				<div>
					<img class="uk-align-center" src="https://placeimg.com/400/400/nature" alt="" style="max-width: 200px; max-height: 200px;">
				</div>
				<div>
					<h3 style="color:white;">Full Body</h3>
					<p style="color:white;">This plan is a full service strategy to building a better you. During this eight week routine, you will receive the benefits of the eight week booty builder, plus an added two upper body days and HIIT circuits per week. Everything you need to make wholesome improvements to every inch of your body will be found in this plan.</p>
				</div>
			</div>
		</div>
		
	</div>
</div>

<!-- REVIEWS section -->
<div class="uk-container uk-padding-large">
	<a name="reviews"></a>
	<div class="uk-width-1-2@m uk-align-center">
		<h1 style="padding-left:5%;">Client Reviews<br></h1>
		<img src="assets/images/underscore-05.svg" width="50px" height="15px">
	</div>
	<div class="uk-container uk-width-2-3@l uk-align-center uk-visible@l">
		<div style="margin: 0 auto; width: 80%" class="uk-grid uk-child-width-expand@l" uk-grid>
			<div uk-slideshow="animation: slide; autoplay: true;">
				<div class="uk-position-relative uk-visible-toggle" style="min-height: 350px;">
					<ul class="uk-slideshow-items">
						<li>
							<div class="uk-child-width-expand@l" uk-grid>
								<div>
									<img class="uk-border-circle" src="https://placeimg.com/200/200/people" width="200" height="200" alt="Review">
								</div>
								<div>
									<h3 class="removeMarginPadding">Jane Doe</h3>
									<p class="removeMarginPadding">6/8/2018</p>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="uk-child-width-expand@l" uk-grid>
								<div>
									<img class="uk-border-circle" src="https://placeimg.com/400/400/people" width="200" height="200" alt="Review">
								</div>
								<div>
									<h3 class="removeMarginPadding">Sally May</h3>
									<p class="removeMarginPadding">6/8/2018</p>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="uk-child-width-expand@l" uk-grid>
								<div>
									<img class="uk-border-circle" src="https://placeimg.com/300/300/people" width="200" height="200" alt="Review">
								</div>
								<div>
									<h3 class="removeMarginPadding">John Deer</h3>
									<p class="removeMarginPadding">6/8/2018</p>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. The end was near. You hear?
									</p>
								</div>
							</div>
						</li>
					</ul>
					<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
					<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
					
				</div>
				<ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
			</div>
		</div>
	</div>
	
	<!-- Slideshow on smaller screens -->
	<div class="uk-container uk-width-2-3@l uk-align-center uk-hidden@l">
		<div style="margin: 0 auto; width: 80%" class="uk-grid uk-child-width-expand@l" uk-grid>
			<div uk-slideshow="animation: slide; autoplay: true;">
				<div class="uk-position-relative uk-visible-toggle">
					<ul class="uk-slideshow-items" style="min-height: 500px;">
						<li>
							<div class="uk-child-width-expand@l" uk-grid>
								<div>
									<img class="uk-border-circle" src="https://placeimg.com/200/200/people" width="200" height="200" alt="Review">
								</div>
								<div>
									<h3 class="removeMarginPadding">Jane Doe</h3>
									<p class="removeMarginPadding">6/8/2018</p>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="uk-child-width-expand@l" uk-grid>
								<div>
									<img class="uk-border-circle" src="https://placeimg.com/400/400/people" width="200" height="200" alt="Review">
								</div>
								<div>
									<h3 class="removeMarginPadding">Sally May</h3>
									<p class="removeMarginPadding">6/8/2018</p>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
								</div>
							</div>
						</li>
						<li>
							<div class="uk-child-width-expand@l" uk-grid>
								<div>
									<img class="uk-border-circle" src="https://placeimg.com/300/300/people" width="200" height="200" alt="Review">
								</div>
								<div>
									<h3 class="removeMarginPadding">John Deer</h3>
									<p class="removeMarginPadding">6/8/2018</p>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
								</div>
							</div>
						</li>
					</ul>
					<a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
					<a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
					
				</div>
				<ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
			</div>
		</div>
	</div>
	
</div>

<!-- BLOG section -->
<div class="uk-container uk-padding-large">
	<a name="blog"></a>
	<div class="uk-container">
		<div class="uk-width-1-2@m uk-align-center">
			<h1 style="padding-left:5%;">Blog<br></h1>
			<img src="assets/images/underscore-05.svg" width="50px" height="15px">
		</div>
		<div class="blog-grid" uk-scrollspy="cls: uk-animation-slide-right; target: > div > div; delay: 62.5; repeat: true">
			<div class="uk-grid-small uk-grid-match" uk-grid>
				<!-- Row 1 -->
				<div>
					<img src="https://placeimg.com/300/200/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
				<div>
					<img src="https://placeimg.com/400/400/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
				<div>
					<img src="https://placeimg.com/600/600/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
			</div>
			<br>
			<div class="uk-grid-small uk-grid-match" uk-grid>
				<!-- Row 2 -->
				<div>
					<img src="https://placeimg.com/350/350/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
				<div>
					<img src="https://placeimg.com/420/420/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
				<div>
					<img src="https://placeimg.com/310/310/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
			</div>
			<br>
			<div class="uk-grid-small uk-grid-match" uk-grid>
				<!-- Row 3 -->
				<div>
					<img src="https://placeimg.com/700/700/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
				<div>
					<img src="https://placeimg.com/550/550/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
				<div>
					<img src="https://placeimg.com/260/260/nature" alt="" style="max-width: 200px; max-height: 200px;box-shadow: 10px 10px 25px #414042;">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- CONTACT Modal -->
<div id="contact" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title"><span uk-icon="icon: mail; ratio: 2"></span>&nbsp;Contact</h2>
        </div>
        <div class="uk-modal-body">
            <form action="assets/scripts/process_email.php" method="post" class="uk-grid-small" uk-grid>
				<div class="uk-width-1-2@m">
			        <input class="uk-input" type="name" name="name" placeholder="Name">
			    </div>
			    <div class="uk-width-1-2@m">
			        <input class="uk-input" type="email" name="email" placeholder="Email">
			    </div>
			    <div class="uk-width-1-1">
			        <textarea class="uk-textarea" rows="7" type="message" name="message" placeholder="Message"></textarea>
			    </div>
			
        </div>
        <div class="uk-modal-footer uk-text-left">
			<input class="uk-button uk-button-primary" name="submit" type="submit" value="Send">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>   
        </div>
		</form>
    </div>
</div>
	

</body>

<footer>
	
<div class="insideShadowTop uk-padding uk-padding-remove-horizontal" style="background-image:url(assets/images/textured_bg.jpg)">
	<div style="max-width: 250px">
		<img src="assets/images/mark-04.svg">
	</div>
	<p class="uk-text-center" style="color:white;"><a uk-icon="icon: file-edit" href="http://www.vines.design"></a> by <a style="color:white;" href="https://www.vines.design" target="_blank">  Vines.design</a></p>
</div>
</footer>
</html>