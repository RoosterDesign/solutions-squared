import $ from "jquery"
import './plugins/slick-slider'
import './plugins/jquery-match-height'
import './components/navigation';
import './components/reveal';

$(".slider").slick({
  autoplay: true,
  adaptiveHeight: true,
  autoplaySpeed: 6000,
  slidesToShow: 1,
  arrows: false,
  dots: true
});

// Match Heights
$(function() {
	$('.mh').matchHeight({
    byRow: true,
    property: 'height',
    target: null,
    remove: false
});
});