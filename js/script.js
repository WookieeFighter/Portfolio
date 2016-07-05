$(document).ready(function () {
/*MENU FUNCTIONALITY-----------------------------------*/

var landing = $('#landing'),
	nav = $('nav'),
	about = $('#about'),
	timeline = $('#timeline'),
	skills = $('#skills'),
	portfolio = $('#portfolio'),
	contact = $('#contact'),
	page = $('body, html')
	;

	$(document).scroll(function(){
		
		if(  $(window).scrollTop() > landing.height()){
			nav.addClass("navbar-fixed-top");
			about.css("padding-top","100px");
		} 
		else{
			nav.removeClass("navbar-fixed-top");
			about.css("padding-top","50px");
		}

	});
	 
	$('#landing-button, .logo').click(function(){
		page.animate({ scrollTop: (landing.offset().top ) },1000);
	});

	$('#about-button').click(function(){
		if ( $(window).scrollTop() <  landing.height() ){
			page.animate({ scrollTop: (about.offset().top - 150) },1000);
		}else{
			page.animate({ scrollTop: (about.offset().top - 55) },1000);
		}
	});
	$('#skills-button').click(function(){
		if ( $(window).scrollTop() <  landing.height() ){
			page.animate({ scrollTop: (skills.offset().top - 120) },1000);
		}else{
			page.animate({ scrollTop: (skills.offset().top - 100) },1000);
		}
	});

	$('#portfolio-button').click(function(){
		if ( $(window).scrollTop() <  landing.height() ){
			page.animate({ scrollTop: (portfolio.offset().top - 120) },1000);
		}else{
			page.animate({ scrollTop: (portfolio.offset().top - 100) },1000);
		}
	});

	$('#contact-button').click(function(){
		if ( $(window).scrollTop() <  landing.height() ){
			page.animate({ scrollTop: (contact.offset().top - 120) },1000);
		}else{
			page.animate({ scrollTop: (contact.offset().top - 100) },1000);
		}
	});


/*ADD ACTIVE CLASS TO MENU ITEMS BASED ON PAGE HEIGHT----------------*/

$('#landing-button').addClass("active");

$(document).scroll(function(){
	if($(window).scrollTop() <  about.offset().top - 300){
		$('nav ul li').removeClass("active");
		$('#landing-button').addClass("active");
	}if($(window).scrollTop() >  about.offset().top - 300 && $(window).scrollTop() < portfolio.offset().top-300){
		$('nav ul li').removeClass("active");
		$('#about-button').addClass("active");
	}if($(window).scrollTop() >  portfolio.offset().top - 300 && $(window).scrollTop() < skills.offset().top- 300){
		$('nav ul li').removeClass("active");
		$('#portfolio-button').addClass("active");
	}if($(window).scrollTop() >  skills.offset().top - 300 && $(window).scrollTop() < contact.offset().top- 300){
		$('nav ul li').removeClass("active");
		$('#skills-button').addClass("active");
	}if($(window).scrollTop() >  contact.offset().top - 300){
		$('nav ul li').removeClass("active");
		$('#contact-button').addClass("active");
	}

});

/* MAKE  MENU COLLAPSE WHEN A LINK IS CLICKED-----------------------*/

var docWidth = $(document).width();

if(docWidth < 1000){
	$('.nav li').on('click', function(){
  	  $('.navbar-toggle').click() //bootstrap 3.x by Richard
	});
}else{

}
/*Make Functional on Window Resize*/

$(window).on('resize', function(){

	var docWidth = $(document).width();

	if(docWidth < 1000){
		$('.nav li').on('click', function(){
	  	  $('.navbar-toggle').click() 
		});
	}else{
		$('.nav li').on('click', function(){
		});
	}
});




/*SET LANDING PAGE HEIGHT TO WINDOW SIZE*/

var	windowHeight = $(window).innerHeight();

landing.css('height',windowHeight-100);

$(window).on('resize', function(){
	var windowHeight = $(window).innerHeight()
	landing.css('height',windowHeight-100);
});



/*Porfolio overlay------------------------------------------------------*/

});