const portfosOwl = $(".portfos-carousel");

portfosOwl.owlCarousel({
    loop: true,
    autoplay: false,
    // autoplayHoverPause: true,
    items: 1,
    nav: true,
    mouseDrag: false,
    touchDrag: false,
    pullDrag: false,
    animateOut: "fadeOutUp",
    animateIn: "fadeInUp",
    navText: [
        "<img src='assets/icons/chevron.svg'>",
        "<img src='assets/icons/chevron.svg'>",
    ],
});

portfosOwl.on("mousewheel", ".owl-stage", function (e) {
    if (e.originalEvent.deltaY > 0) {
        portfosOwl.trigger("next.owl");
    } else {
        portfosOwl.trigger("prev.owl");
    }
    e.preventDefault();
});
