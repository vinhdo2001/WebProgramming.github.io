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
    'https://images.unsplash.com/photo-1500462918059-b1a0cb512f1d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80',
    'https://images.unsplash.com/photo-1489533119213-66a5cd877091?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80',
    'https://images.unsplash.com/photo-1550686041-366ad85a1355?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80',
    'https://images.unsplash.com/photo-1495001258031-d1b407bc1776?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80',
    'https://images.unsplash.com/photo-1507120410856-1f35574c3b45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80',
    'https://images.unsplash.com/photo-1466036692599-070d032f4711?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=2600&q=80'

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