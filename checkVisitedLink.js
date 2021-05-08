// var visited = "true";
const addButton = document.querySelector('#activeLink');
addButton.addEventListener("click", () => {
    // localStorage.setItem("visitedLink", visited);
});


function directToLoginPage(className) {
    document.getElementsByClassName(className).src = 'Login.html';
    console.log(document.getElementsByClassName(className).src)
    // return 'Login.html';
}
function directToMyAccountPage() {
    document.getElementsByClassName(className).src = 'MyAccount(logged-in).html';
    console.log(document.getElementsByClassName(className).src)
    // return 'MyAccount(logged-in).html';
}

let addButton = document.querySelector('#activeLink');
addButton.addEventListener('click', addLink);

function addLink() {
    (localStorage.getItem('visitedLink') != true) ? () => { directToMyAccountPage('activeLink') } : () => { directToLoginPage('activeLink') }
}