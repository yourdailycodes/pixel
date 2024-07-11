const countLg = 5
const countMd = 3
const countSm = 1

const headerOwl = $(".header-carousel")

headerOwl.on('initialized.owl.carousel', function(){
    // locateOwlItems()
})

headerOwl.owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    responsive: {
        0: {
            items: countSm,
        },
        600: {
            items: countMd,
        },
        1000: {
            items: countLg,
        },
    }
});

headerOwl.on("mousewheel", ".owl-stage", function (e) {
    console.log(e);
    if (e.originalEvent.deltaY > 0) {
        headerOwl.trigger("next.owl");
    } else {
        headerOwl.trigger("prev.owl");
    }
    e.preventDefault();
});


headerOwl.on('changed.owl.carousel', function() {
    // locateOwlItems()
})


function locateOwlItems() {

    // GET CURRENT WIDTH
    const W = $(window).width()
    if(W > 600){

        // RESET TRANSFORM FOR ALL ITEMS
        $('.owl-item img').css('transform', 'initial')
        
        // PREPARE NECCESSARY DATA
        const count = W > 1000 ? countLg : countMd
        const center = Math.floor(count / 2)
        const targetItems = $('.owl-item.active')
        // const activeItems = targetItems.slice(Math.max(targetItems.length - count, 1))
        const activeItems = targetItems.slice(0, count)

        // APPLY NECESSARY CHANGES
        for(let n=0; n < count; n++){
            const item = activeItems[n]
            const diff = n-center
            const move = Math.abs(diff * 100)
            const rotate = diff * 20
            $(item).find('img').css('transform', `translateY(${move}px) rotate(${rotate}deg)`)
        }
    }

}