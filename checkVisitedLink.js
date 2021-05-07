var visited = true;
if (visited) { //condition fot recognizeing the link visited or not
    localStorage.getItem('visitedLink') = true
} else {
    localStorage.getItem('visitedLink') = []
}

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