let sliderWrap1 = document.querySelector('.slider-wrap1');
let slider1 = document.querySelector('.slider1');
let clonesWidth1;
let sliderWidth1;
let clones1 = [];
let scrollPos1 = 1
let sliderHover1 = false;
let req1; // request animation frame reference
let items1 = [...document.querySelectorAll('.slider-item1')];
let images1 = [...document.querySelectorAll('.img-div1')];

let imgLinks1 = [
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
    'https://product.hstatic.net/1000370106/product/10.2.1_64d6a07edbc54c74ba0f61e21c9ad09a_master.jpg',
 
 

]
// apply above images as a background to the image items
images1.forEach((image1, idx) => {
    image1.style.backgroundImage = `url(${imgLinks1[idx]})`
})

items1.forEach(item => {
    let clone = item.cloneNode(true);
    clone.classList.add('clone');
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
    let width = 0;
    clones1.forEach(clone => {
        width += clone.offsetWidth;
    })
    return width;
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
            scrollPos1 = sliderWidth1 - clonesWidth1 - 1
        }
        slider1.style.transform = `translateX(${-scrollPos1}px)`
        req1 = requestAnimationFrame(scrollUpdate1)
    } else {
        sliderWrap1.style.overflow = 'scroll';
    }

}

window.addEventListener('resize', onLoad1)

function onLoad1() {
    cancelAnimationFrame(req1);
    calaculateDimensions1()
    scrollPos1 = 1;
    scrollUpdate1();
}

function calaculateDimensions1() {
    sliderWidth1 = slider1.getBoundingClientRect().width;
    clonesWidth1 = getClonesWidth1();
}

onLoad1()