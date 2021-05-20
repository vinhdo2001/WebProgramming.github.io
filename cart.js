if (localStorage.getItem('cart') == null) {
    var cartItems = [];
} else {
    var cartItems = JSON.parse(localStorage.getItem('cart'));
    
}


let addButton = document.querySelector('#add-button');
addButton.addEventListener('click', addProduct);

function addProduct() { 
    let title = document.querySelector('#shop-item-title').textContent;
 
    let price = document.querySelector('#shop-item-price').textContent;
    
    
    

    let product = {
        "title": title,
        quantity : 1,
        "price": price
        
     
    };
    let isNewItem = cartItems.filter(item => item.title == product.title).length ==0;
    if (isNewItem){
        cartItems.push(product);
    }else{
        let item = cartItems.find(item =>item.title == product.title);
        item.quantity ++;
    }
    console.log(product);
  

   


   
    localStorage.setItem('cart', JSON.stringify(cartItems));
}


let buyButton = document.querySelector('#buy-button');
buyButton.addEventListener('click', buyProduct);

function buyProduct() {
    let title = document.querySelector('#shop-item-title').textContent;
    let price = document.querySelector('#shop-item-price').textContent;
    

    let product = {
        "title": title,
        quantity: 0,
        "price": price,
     
    };
    console.log(product);

    let isNewItem = cartItems.filter(item => item.title == product.title).length ==0;
    if (isNewItem){
        cartItems.push(product);
    }else{
        let item = cartItems.find(item =>item.title == product.title);
        item.quantity ++;
    }


   
    localStorage.setItem('cart', JSON.stringify(cartItems));
}