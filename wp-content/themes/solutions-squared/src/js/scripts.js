import $ from "jquery"
import './plugins/slick-slider'
import './components/navigation';


$(".slider").slick({
  autoplay: true,
  autoplaySpeed: 6000,
  slidesToShow: 1,
  arrows: false,
  dots: true
});