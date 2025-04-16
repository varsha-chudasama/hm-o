import "slick-carousel";

export class Plugins {

  init() {
    this.OurValueSlider();
  }
  OurValueSlider() {
    $('.our-values-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      dots: false,
      infinite: false,
      arrows: true,
      prevArrow: ".our-values-section .prev-arrow",
      nextArrow: ".our-values-section .next-arrow",
    })
  }
}
