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
    'https://i.imgur.com/3jOolCX.png',
    'https://i.imgur.com/vIBzeJ6.png',
    'https://i.imgur.com/WjvtOcr.png',
    'https://product.hstatic.net/1000370106/product/16.2.1_28aa5cfe2b394ddba01c4845bbd81739_master.jpg',
    'productImages//product-1.jpg'
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
            console.log('go here scrollPos, ', scrollPos)
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