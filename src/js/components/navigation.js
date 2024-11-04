
// Toggle Slideout Navigation
var hamburgerIcon = document.querySelector('.site-header .hamburger');
hamburgerIcon.addEventListener('click', function () {
	document.body.classList.toggle('nav-open');
	hamburgerIcon.classList.toggle('-isActive');
});


// Open Contat Form
function openContactForm() {
	console.log('openContactForm()');
	openSepcificBlock(jQuery('[data-reveal="contact"]'));
};

// Scroll to section
function menuScrollToSection() {
	var navLinks = document.querySelectorAll('#menu-main-menu a');
	for (let i = 0; i < navLinks.length; i++) {
		const link = navLinks[i];
		link.addEventListener('click', function(e) {
			
			e.preventDefault();
			
			const linkTarget = jQuery(e.target.hash);
			
			document.body.classList.remove('nav-open');
			
			hamburgerIcon.classList.remove('-isActive');

			switch (linkTarget[0].id)
			{
				case 'news':	
				offsetOverride = 120
					break;
				case 'contact':
					offsetOverride = 120
					break;
				case 'about':
					offsetOverride = 80
					break;
				default:
					offsetOverride = 0
			};

			if (linkTarget[0].id === 'contact') {
				openContactForm();
			};
			
			jQuery('html,body').animate({
				scrollTop: jQuery(linkTarget).offset().top - offsetOverride
			}, 2000);

		});	
	};
}

// Scroll menu depending on page
let bodyClass = document.querySelector('body').classList.value;
if(bodyClass.indexOf('home') !== -1) {
	menuScrollToSection();
};
  
// If coming from "Contact" link, open the form
jQuery(document).ready(function($) {
	var urlHash = window.location.hash;
	if ( urlHash === '#contact' ) {
		jQuery('[data-reveal="contact"]').slideDown(600).addClass('-isOpen');
	}
});