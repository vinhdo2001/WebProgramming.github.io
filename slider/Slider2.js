let sliderWrap1 = document.querySelector('.slider-wrap1');
let slider1 = document.querySelector('.slider1');
let clonesWidth1;
let sliderWidth1;
let clones1 = [];
let scrollPos1 = 1
let sliderHover1 = false;
let req1; // request animation frame reference
let items1 = [...document.querySelectorAll('.slider-item1')];
let images = [...document.querySelectorAll('.img-div1')];

let imgLinks1 = [
    'https://images.unsplash.com/photo-1500462918059-b1a0cb512f1d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80',
    'https://images.unsplash.com/photo-1489533119213-66a5cd877091?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1951&q=80',
    'https://images.unsplash.com/photo-1550686041-366ad85a1355?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80',
    'https://images.unsplash.com/photo-1495001258031-d1b407bc1776?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=934&q=80',
    'https://images.unsplash.com/photo-1507120410856-1f35574c3b45?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80',
    'https://images.unsplash.com/photo-1466036692599-070d032f4711?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=2600&q=80'



]
// apply above images as a background to the image items
images1.forEach((image1, idx) => {
    image1.style.backgroundImage = `url(${imgLinks1[idx]})`
})

items1.forEach(item => {
    let clone1 = item.cloneNode(true);
    clone1.classList.add('clone');
    slider1.appendChild(clone);
    clones1.push(clone);
})

sliderWrap1.addEventListener('mouseover', () => {
    sliderHover1 = true;
})

sliderWrap1.addEventListener('mouseleave', () => {
    sliderHover1 = false;
})

function getClonesWidth1() {
    let width1 = 0;
    clones1.forEach(clone1 => {
        width1 += clone1.offsetWidth1;
    })
    return width1;
}


function scrollUpdate1() {
    if (window.innerWidth > 760) {
        sliderWrap1.style.overflow = 'hidden';
        if (!sliderHover1) {
            scrollPos1 -= 2
        }

        if (clonesWidth1 + scrollPos1 >= sliderWidth1) {

            window.scrollTo({ top: 1 });
            scrollPos1 = 1;
        } else if (scrollPos1 <= 0) {
            // console.log('go here scrollPos, ', scrollPos1)
            window.scrollTo({ top: sliderWidth1 - clonesWidth1 - 1 })
            scrolscrollPos1lPo1s = sliderWidth1 - clonesWidth1 - 1
        }
        slider1.style.transform = `translateX(${-scrollPos1}px)`

        req1 = requestAnimationFrame(scrollUpdate1)
    } else {
        sliderWrap1.style.overflow = 'scroll';
    }

}

window.addEventListener('resize', onLoad1)

function onLoad1() {
    cancelAnimationFrame1(req1);
    calaculateDimensions1()
    document.body.style.height = `${sliderWidth1}px`
    scrollPos1 = 1;
    scrollUpdate1();
}

function calaculateDimensions1() {

    sliderWidth1 = slider1.getBoundingClientRect1().width;
    clonesWidth1 = getClonesWidth1();
}

onLoad1()