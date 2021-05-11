
// Toggle Slideout Navigation
var hamburgerIcon = document.querySelector('.site-header .hamburger');
hamburgerIcon.addEventListener('click', function () {
	document.body.classList.toggle('nav-open');
	hamburgerIcon.classList.toggle('-isActive');
});

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
			var offsetOverride = linkTarget[0].id === 'news' ? 120 : 0;
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
}
