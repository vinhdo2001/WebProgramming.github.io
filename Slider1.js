let sliderWrap = document.querySelector('.slider-wrap');
let slider = document.querySelector('.slider');
let clonesWidth;
let sliderWidth;
let clones = [];
let scrollPos = 1
let sliderHover = false;
let req; // request animation frame reference
let items = [...document.querySelectorAll('.slider-item')];
let images = [...document.querySelectorAll('.img-div')];

let imgLinks = [
    'https://product.hstatic.net/1000370106/product/8.2_058fb4153d984e4cae66dc1769393d09_master.jpg',
    'https://product.hstatic.net/1000370106/product/5.2.1_c28c5cd9049c4a00b2471938b1f67a03_master.jpg',
    'https://product.hstatic.net/1000370106/product/19.2.1_3fc47167084a4c7f852ff16b6a6c4abb_master.jpg',
    'https://product.hstatic.net/1000370106/product/9.1_ab24be97f37444aaa5c676ddae699125_master.jpg',
    'https://product.hstatic.net/1000370106/product/16.2.1_28aa5cfe2b394ddba01c4845bbd81739_master.jpg',
    'https://product.hstatic.net/1000370106/product/20.1_e61991eeb4bb4d00b1f9cef214f87946_master.jpg',
    'https://product.hstatic.net/1000370106/product/1.1_ebd1b644abae44fa991b0bda7ebdbca8_master.jpg',
    'https://product.hstatic.net/1000370106/product/19.1_f07eeeae858845a38a37873ee317fda1_master.jpg',
    'https://product.hstatic.net/1000370106/product/10.2.1_64d6a07edbc54c74ba0f61e21c9ad09a_master.jpg',
    'https://product.hstatic.net/1000370106/product/25.1_d5cf847088434116804d8fa484aac20c_master.jpg',
 
         
]
// apply above images as a background to the image items
images.forEach((image, idx) => {
    image.style.backgroundImage = `url(${imgLinks[idx]})`
})

items.forEach(item => {
    let clone = item.cloneNode(true);
    clone.classList.add('clone');
    slider.appendChild(clone);
    clones.push(clone);
})

sliderWrap.addEventListener('mouseover', () => {
    sliderHover = true;
})

sliderWrap.addEventListener('mouseleave', () => {
    sliderHover = false;
})

function getClonesWidth() {
    let width = 0;
    clones.forEach(clone => {
        width += clone.offsetWidth;
    })
    return width;
}
function scrollUpdate() {
    if (window.innerWidth > 760) {
        sliderWrap.style.overflow = 'hidden';
        if (!sliderHover) {
            scrollPos -= 2
        }

        if (clonesWidth + scrollPos >= sliderWidth) {
            window.scrollTo({ top: 1 });
            scrollPos = 1;
        } else if (scrollPos <= 0) {
            window.scrollTo({ top: sliderWidth - clonesWidth - 1 })
            scrollPos = sliderWidth - clonesWidth - 1
        }
        slider.style.transform = `translateX(${-scrollPos}px)`

        req = requestAnimationFrame(scrollUpdate)
    } else {
        sliderWrap.style.overflow = 'scroll';
    }

}

window.addEventListener('resize', onLoad)

function onLoad() {
    cancelAnimationFrame(req);
    calaculateDimensions()
    document.body.style.height = `${sliderWidth}px`
    scrollPos = 1;
    scrollUpdate();
}

function calaculateDimensions() {

    sliderWidth = slider.getBoundingClientRect().width;
    clonesWidth = getClonesWidth();
}
onLoad()