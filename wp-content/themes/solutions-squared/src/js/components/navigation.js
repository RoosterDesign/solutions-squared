
// Toggle Slideout Navigation
var hamburgerIcon = document.querySelector('.site-header .hamburger');
hamburgerIcon.addEventListener('click', function () {
	document.body.classList.toggle('mobile-nav-open');
	hamburgerIcon.classList.toggle('is-active');
});