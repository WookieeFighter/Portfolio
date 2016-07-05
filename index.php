
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portfolio of Eric Walker</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:800,600,400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css"/>	
</head>

<body>
<!-- LANDING -->
	<section id="landing">
		<div class="container">
			<img id="my-name" src="img/name.png"/>
			<h2>Web Developer. Physicist. Kinesiologist.</h2>
		</div>
		
	</section>
<!-- NAV -->


  <nav class="navbar navbar-custom navbar-static-top">
      <div class="container">
      	<div class="logo"><!-- 
            <a  href="index.php"> -->
            <h1 class="bold-font">ERIC WALKER</h1>
<!--             </a>
 -->          </div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
          </button>

        </div>
        <div id="navbar" class="navbar-collapse collapse"> 
          <ul class="nav navbar-nav">
      				<li id="landing-button">HOME</li>
      				<li id="about-button">ABOUT</li>
      				<li id="portfolio-button">PORTFOLIO</li>
      				<li id="skills-button">SKILLS</li> 
      				<li id="contact-button">CONTACT</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<!-- ABOUT SECTION -->
	<section id="about"><a name="about"></a>
		<div class="container">
			<div class="title">
				<h1 class="bold-font">
					ABOUT ME
				</h1>
				<h2>
					A multidiscipliary explorer always looking to learn new things
				</h2>
			</div>

			<div class="row">
				<div class="col-md-4">
					<img id="headshot" src="img/headshot.png">	

				</div>
				<div class="col-md-8">
					<div id="biography">
						<p>
							Hello! My name is Eric Walker and I am a <span class="highlight">front-end web developer</span> based in Toronto.  I create <span class="highlight">responsive websites</span> for small businesses and individuals. 
							After working for years as a kinesiologist, I decided to return to school and pursue my degree in physics.  Upon graduating, I stumbled upon web development 
							while working on a buisness venture and have been pursuing it ever since.    
						</p>

						<div class="row">
							<div class="col-md-4">
								<h3>BIRTHPLACE</h3>
								<p>Elliot Lake, Ontario</p>
							</div>
							<div class="col-md-4">
								<h3>RESIDENCE</h3>
								<p>Toronto, Ontario</p>
							</div>
							<div class="col-md-4">
								<h3>HOBBIES</h3>
								<p>Badminton, Videogames</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<h3>BORN</h3>
								<p>1983</p>
							</div>
							<div class="col-md-4">
								<h3>EDUCATION</h3>
								<p>BSc Physics, BSc Kin</p>
							</div>
							<div class="col-md-4">
							</div>
						</div>

						<a href="img/resume.pdf" download>
							<div id="resume"> 
								<i class="fa fa-file fa-2x"></i><h3>DOWNLOAD RESUME</h3>
							</div>
						</a>
					</div>				
				</div>				
			</div>
		</div>		
	</section>
	<!-- PORTFOLIO -->
	<section id="portfolio"><a name="portfolio"></a>
		<div class="container">
			<div class="title">
				<h1 class="bold-font">
					PORTFOLIO
				</h1>
				<h2>
					Here are a few things I have been working on
				</h2>
			</div>
			<div class="row">
				
				<div class="col-lg-4 col-md-6 col-sm-12 portfolio-item">
					<div class="mask">
						<h2>RayTsePhotography</h2>
							<a href="portfolio/raytsephoto.php" class="btn btn-portfolio">
								VIEW PROJECT<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</a>
						<p>Photography Portfolio</p>			
					</div>
					<img src="img/photo.png">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 portfolio-item">
					<div class="mask">
						<h2>Mountain Shidokan</h2>
							<a href="portfolio/karate.php" class="btn btn-portfolio">
								VIEW PROJECT<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</a>
						<p>Karate School in Hamilton, On</p>			
					</div>
					<img src="img/karate.png">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 portfolio-item">
					<div class="mask">
						<h2>Walker Kinetics</h2>
							<a href="portfolio/kinetics.php" class="btn btn-portfolio">
								VIEW PROJECT<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</a>
						<p>My Personal Training Company</p>						
					</div>
					<img src="img/kinetics.png">
				</div>		
				<div class="col-lg-4 col-md-6 col-sm-12 portfolio-item">
					<div class="mask">
						<h2>FANCY BUTTON</h2>
							<a href="portfolio/fancybutton.php" class="btn btn-portfolio">
								VIEW PROJECT<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</a>
						<p>CSS Button Plugin CSS</p>						
					</div>
					<img src="img/fancybutton.png">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 portfolio-item">
					<div class="mask">
						<h2>Home Is Canada</h2>
							<a href="portfolio/refugee.php" class="btn btn-portfolio">
								VIEW PROJECT<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</a>
						<p>Information about Syrian Refugees in Canada</p>						
					</div>
					<img src="img/refugee-background.png">
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12 portfolio-item">
					<div class="mask">
						<h2>SWOLETEES</h2>
							<a href="portfolio/swoletees.php" class="btn btn-portfolio">
								VIEW PROJECT<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</a>
						<p>E-commerce T-Shirt Store</p>						
					</div>
					<img src="img/swole.png">
				</div>		
			</div>
		</div>	
	</section>
<!-- SKILLS -->
	<section id="skills"><a name="skills"></a>
		<div class="container">
			<div class="title">
				<h1 class="bold-font">
					MY SKILLS
				</h1>
				<h2>
					Can't build a house without the proper tools
				</h2>
			</div>
			<div>
				<h1 class="skills-subheader">LANGUAGES</h1>
			</div>

			<div class="row">
				<div class="skills-col col-md-15 col-vs-6">
					<div class="circle-holder">
						<p class="percentile">95%</p>	
						<img src="img/html-circle.svg">						
					</div>
					<h3>CSS/SASS</h3>
				</div>
				<div class="skills-col col-md-15 col-vs-6">
					<div class="circle-holder">
						<p class="percentile">80%</p>
						<img src="img/jquery-circle.svg">
					</div>
					<h3>JQUERY</h3>
				</div>

				<div class="skills-col col-md-15 col-vs-6">
					<div class="circle-holder">
						<p class="percentile">60%</p>
						<img src="img/js-circle.svg">
					</div>
					<h3>JAVASCRIPT</h3>
				</div>

				<div class="skills-col col-md-15 col-vs-6">
					<div class="circle-holder">
						<p class="percentile">60%</p>
						<img src="img/php-circle.svg">
					</div>
					<h3>PHP</h3>
				</div>	

				<div class="skills-col col-md-15 col-vs-6">
					<div class="circle-holder">
						<p class="percentile">50%</p>
						<img src="img/angular-circle.svg">
					</div>
					<h3>ANGULAR</h3>
				</div>			
			</div>

			<div>
				<h1 class="skills-subheader">TOOLS</h1>
			</div>

			<div class="row">
				<div class="skills-col col-md-15 col-vs-6">
						<div class="circle-holder">
					<p class="percentile">90%</p>
						<img src="img/il-circle.svg">
					</div>
					<h3>ILLUSTRATOR</h3>
				</div>
				<div class="skills-col col-md-15 col-vs-6">
					<div class="circle-holder">
						<p class="percentile">90%</p>
						<img src="img/boot-circle.svg">
					</div>
					<h3>BOOTSTRAP</h3>
				</div>

				<div class="skills-col col-md-15 col-vs-6">
					<div class="circle-holder">
						<p class="percentile">80%</p>
						<img src="img/ps-circle.svg">
					</div>
					<h3>PHOTOSHOP</h3>
				</div>

				<div class="skills-col col-md-15 col-vs-6">
					<div class="circle-holder">
						<p class="percentile">70%</p>
						<img src="img/sublime-circle.svg">
					</div>
					<h3>SUBLIME</h3>
				</div>	

				<div class="skills-col col-md-15 col-vs-6">
					<div class="circle-holder">
						<p class="percentile">60%</p>
						<img src="img/wp-circle.svg">
					</div>
					<h3>WORDPRESS</h3>
				</div>			
			</div>

					
		</div>	
	</section>

<!-- CONTACT -->
	<a name="contact"></a>
	<section id="contact">
		<div class="container">
			<div id="contact-wrap">
				<div class="title">
					<h1 class="bold-font">
						CONTACT ME
					</h1>
					<h2>
						Let's work together
					</h2>
				</div>

				
				<div class="row">
					<div class="col-lg-6 contact-info"><!-- 
						<h2 class="bold-font">Contact Info:</h2> -->
						
						<h2><i class="fa fa-envelope" aria-hidden="true"></i>Eric.walker.kin<br class="hidden"><span></span>@gmail.com</h2>
						<h2><i class="fa fa-phone" aria-hidden="true"></i>416-727-8044</h2>
						
					</div>
					<div class="col-lg-6">						
						<form class="form-horizontal" method="post" name="contact_form" action="contact_form_handler.php">
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Name">
							</div>
							<div class="form-group">
									<input type="text" class="form-control" name="email" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="subject" placeholder="Subject">
							</div>
							<div class="form-group">
								<textarea class="form-control" rows="4" name="message" placeholder="Message..."></textarea>
							</div>
							<div class="form-group">
								<input type="submit" class="btn btn-contact" value="SEND">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>	
	</section>
<!-- FOOTER -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 quote">
					<h3 class="bold-font">"To improve is to change;<br>&nbsp to be perfect is to change often."</h3>
					<h4 class="bold-font">- Churchhill</h4>
				</div>
				<div class="col-lg-6 icons">
					<ul>				
						<li><a target="_blank" href="https://ca.linkedin.com/in/eric-walker-18119569"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="http://codepen.io/wookieeFighter/"><i class="fa fa-codepen fa-3x" aria-hidden="true"></i></a></li>
						<li><a target="_blank" href="https://github.com/WookieeFighter"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
		</div>	
	</footer>
<!-- SCRIPTS -->
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>

</body>
</html>
