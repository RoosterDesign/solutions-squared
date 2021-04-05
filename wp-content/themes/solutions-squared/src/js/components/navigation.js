
// Toggle Slideout Navigation
var hamburgerIcon = document.querySelector('.site-header .hamburger');
hamburgerIcon.addEventListener('click', function () {
	document.body.classList.toggle('nav-open');
	hamburgerIcon.classList.toggle('-isActive');
});

// Scroll to section
var navLinks = document.querySelectorAll('.navigation-list__link');
for (let i = 0; i < navLinks.length; i++) {
	const link = navLinks[i];
	link.addEventListener('click', function(e) {
		e.preventDefault();
		const linkTarget = jQuery(e.target.hash);
		document.body.classList.remove('nav-open');
		hamburgerIcon.classList.remove('-isActive');
		jQuery('html,body').animate({
			scrollTop:  jQuery(linkTarget).offset().top
		}, 2000);
	});	
};