if (localStorage.getItem('cart') == null) {
    var cartItems = [];
} else {
    var cartItems = JSON.parse(localStorage.getItem('cart'));
    
}


let addButton = document.querySelector('#add-button');
addButton.addEventListener('click', addProduct);

function addProduct() {
    let title = document.querySelector('#title').textContent;
    let price = document.querySelector('#price').textContent;
    

    let product = {
        "title": title,
        "price": price,
     
    };
    console.log(product);

    cartItems.push(product);
    localStorage.setItem('cart', JSON.stringify(cartItems));
}


let buyButton = document.querySelector('#buy-button');
buyButton.addEventListener('click', buyProduct);

function buyProduct() {
    let title = document.querySelector('#title').textContent;
    let price = document.querySelector('#price').textContent;
    

    let product = {
        "title": title,
        "price": price,
     
    };
    console.log(product);

    cartItems.push(product);
    localStorage.setItem('cart', JSON.stringify(cartItems));
}