//nnếu visit lần đầu auto qua trang login
// nếu lần 2 thì có 2 cases:  qua trang login nếu chưa login, hoặc qua  my account nếu login rồi

const addButton = document.querySelector('#activeLink');
addButton.addEventListener("click", () => {
    if (localStorage.getItem('visited') == null) {
        document.getElementsByClassName('activeLink').src = 'Login.html';//qua login page phải login thành công thì visited =true và alreadyLogin =true
    }
    else {
        if (localStorage.getItem('alreadyLogin') == null) {
            document.getElementsByClassName('activeLink').src = 'Login.html';//qua login page phải login thành công thì visited =true và alreadyLogin =true
        }
        else {
            document.getElementsByClassName('activeLink').src = 'MyAccount(logged-in).html';
        }
    }
});






















const addButton = document.querySelector('#activeLink');
addButton.addEventListener("click", () => {
    // localStorage.setItem("visitedLink", visited);
});


function directToLoginPage(className) {
    document.getElementsByClassName(className).src = 'Login.html';
    ;
    console.log(document.getElementsByClassName(className).src)
    // return 'Login.html';
}
function directToMyAccountPage() {
    document.getElementsByClassName(className).src = 'MyAccount(logged-in).html';
    localStorage.setItem("successfulLogin", JSON.stringify(true))
    console.log(document.getElementsByClassName(className).src)
    // return 'MyAccount(logged-in).html';
}

let addButton = document.querySelector('#activeLink');
addButton.addEventListener('click', addLink);

function addLink() {
    (localStorage.getItem('visitedLink') != true) ? () => { directToMyAccountPage('activeLink') } : () => { directToLoginPage('activeLink') }
}